<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Run Seeder to populate the database in a more secure way
        DB::table('users')->delete();
        $users = [
            [
            'name' => 'Administrador',
            'email' => 'adm@adm.com',
            'password' => Hash::make("zzxx5263"),
            'role' => 'Administrador'
            ],
            [
            'name' => 'Cliente',
            'email' => 'cliente@clt.com',
            'password' => Hash::make("zzxx5263"),
            'role' => 'cliente'
            ]
        ];
        User::create($users);
    }
}
