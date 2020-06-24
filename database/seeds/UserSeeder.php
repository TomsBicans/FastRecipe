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
        self::addUser('Admin', 'admin@fastrecipe.net', Hash::make('admin'), 1);
        self::addUser('Toms', 'tomsbicans@gmail.com', Hash::make('password'), 2);
        self::addUser('Zigfrids', 'zigfrids@inbox.lv', Hash::make('password'), 2);
        self::addUser('Darzenis', 'darzenis@inbox.lv', Hash::make('password'), 2);
        self::addUser('Markuss', 'marks123@cisco.com', Hash::make('password'), 2);
        self::addUser('Dzenis', 'asais@ee.lv', Hash::make('password'), 2);
    }
}
