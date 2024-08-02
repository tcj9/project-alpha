<?php

namespace App\migrations;

use Illuminate\Database\Capsule\Manager as Capsule;

class CreateUsersTable
{
    public function up()
    {
        Capsule::schema()->create('users', function ($table) {
            $table->uuid('id')->primary();
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('profile_picture')->nullable();
            $table->text('bio')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Capsule::schema()->dropIfExists('users');
    }
}
