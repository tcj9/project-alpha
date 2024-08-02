<?php

namespace App\controllers;

use App\models\User;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class UserController extends BaseController
{
    public function register(Request $request)
    {
        if ($request->isMethod('POST')) {
            $data = $request->request->all();

            // Validation and creation logic
            $user = User::create([
                'id' => (string) \Ramsey\Uuid\Uuid::uuid4(),
                'username' => $data['username'],
                'email' => $data['email'],
                'password' => password_hash($data['password'], PASSWORD_BCRYPT),
            ]);

            return new Response('User registered successfully', 201);
        }

        return $this->render('register');
    }

    public function index()
    {
        return $this->render('index');
    }
}
