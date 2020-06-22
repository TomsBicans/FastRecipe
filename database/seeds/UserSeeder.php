<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function addUser($name, $email, $password, $role)
    {
        $user = new User();
        $user->name = $name;
        $user->email = $email;
        $user->email_verified_at = date('now');
        $user->password = $password;
        $user->role = $role;
        $user->save();
    }
    public function run()
    {
        self::addUser('Admin', 'admin@fastrecipe.net', '$2y$10$gAixpK/W/bAT.lTF8/R6xOuQHRoqxBYvmeT2ImFJW5P9Q2wpSW/M2', 1);
        self::addUser('Toms', 'tomsbicans@gmail.com', '$2y$10$gAixpK/W/bAT.lTF8/R6xOuQHRoqxBYvmeT2ImFJW5P9Q2wpSW/M2', 2);
        self::addUser('Zigfrids', 'zigfrids@inbox.lv', '$2y$10$gAixpK/W/bAT.lTF8/R6xOuQHRoqxBYvmeT2ImFJW5P9Q2wpSW/M2', 2);
        self::addUser('Darzenis', 'darzenis@inbox.lv', '$2y$10$gAixpK/W/bAT.lTF8/R6xOuQHRoqxBYvmeT2ImFJW5P9Q2wpSW/M2', 2);
        self::addUser('Markuss', 'marks123@cisco.com', '$2y$10$gAixpK/W/bAT.lTF8/R6xOuQHRoqxBYvmeT2ImFJW5P9Q2wpSW/M2', 2);
        self::addUser('Dzenis', 'asais@ee.lv', '$2y$10$gAixpK/W/bAT.lTF8/R6xOuQHRoqxBYvmeT2ImFJW5P9Q2wpSW/M2', 2);
    }
}
