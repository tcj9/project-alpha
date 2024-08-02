<?php

require 'bootstrap.php';

use App\migrations\CreateUsersTable;

$migration = new CreateUsersTable();

$migration->up();

echo "Migration completed successfully.\n";
