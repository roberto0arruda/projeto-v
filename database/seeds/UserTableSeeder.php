<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'id_cliente' => '0',
            'name' => 'administrador',
            'username' => 'admin',
            'email' => 'admin@projetov.com',
            'password' => Hash::make('admin12345'),
            'admin' => 1
        ]);
    }
}
