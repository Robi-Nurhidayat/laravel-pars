<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        collect([
            'name' => 'Robi Nurhidayat',
            'email' => 'robivanpersie290899@gmail.com',
            'password' => bcrypt('password'),
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'name' => 'Robi Nurhidayat',
            'email' => 'robivanpersie290899@gmail.com',
            'password' => bcrypt('password'),
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now()
        ])->each(function($user){
            DB::table('users')->insert($user);
        });
    }
}
