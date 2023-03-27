<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class UserData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
        [
            'name'=> 'Administrator',
            'username'=>'admin',
            'password'=>bcrypt('123456'),
            'level'=> 1,
            'email' => 'admin@puputfebrianti.com'
        ],
        [
            'name'=> 'dosen',
            'username'=>'dosen',
            'password'=>bcrypt('123456'),
            'level'=> 1,
            'email' => 'dosen@puputfebrianti.com'
        ],
        [
            'name'=> 'mahasiswa',
            'username'=>'mahasiswa',
            'password'=>bcrypt('123456'),
            'level'=> 1,
            'email' => 'mahasiswa@puputfebrianti.com'
        ],
    ];

    foreach($user as $key => $value){
        User::create($value);
    }

    }
}
