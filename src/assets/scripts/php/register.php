<?php
include 'config.php';

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

header('Content-Type: application/json');

function respond($status, $message)
{
    echo json_encode(['status' => $status, 'message' => $message]);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    respond('error', 'Invalid request method');
}

$username = trim($_POST['username'] ?? '');
$email = trim($_POST['email'] ?? '');
$password = $_POST['password'] ?? '';

if (empty($username) || empty($email) || empty($password)) {
    respond('error', 'Username, email, and password are required');
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    respond('error', 'Invalid email format');
}

if (strlen($password) < 7) {
    respond('error', 'Password must be at least 7 characters long');
}

try {
    $pdo->beginTransaction();

    $sql = "SELECT COUNT(*) FROM users WHERE email = ? OR username = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$email, $username]);
    $count = $stmt->fetchColumn();

    if ($count > 0) {
        $pdo->rollBack();
        respond('error', 'Email or username is already registered');
    }

    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    // Generate a short UUID
    $uuid = Uuid::uuid4();
    $shortUuid = substr(base64_encode($uuid->getBytes()), 0, 22); // Shorten UUID to 22 characters

    $sql = "INSERT INTO users (id, username, email, password) VALUES (?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$shortUuid, $username, $email, $hashedPassword]);

    $pdo->commit();
    respond('success', 'User registered successfully');
} catch (PDOException $e) {
    $pdo->rollBack();
    error_log('Database error: ' . $e->getMessage());
    respond('error', 'An error occurred. Please try again later.');
} catch (UnsatisfiedDependencyException $e) {
    respond('error', 'UUID generation error: ' . $e->getMessage());
}
?>