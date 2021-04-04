<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'access' => 0,
            'name' => 'AdminN',
            'familyname' => 'AdminF',
            'email' => 'admin@argon.com',
            'password' => Hash::make('admin')
        ]);
        DB::table('users')->insert([
            'access' => 1,
            'name' => 'DoctorN',
            'familyname' => 'DoctorF',
            'email' => 'doctor@argon.com',
            'password' => Hash::make('doctor')
        ]);
        DB::table('users')->insert([
            'access' => 2,
            'name' => 'NormalN',
            'familyname' => 'NormalF',
            'email' => 'normal@argon.com',
            'password' => Hash::make('normal')
        ]);
    }
}


          