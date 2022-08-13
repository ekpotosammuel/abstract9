<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => "System Adminstrator",
                'email' => "admin@admin.com",
                'email_verified_at' => now(),
                'password' => bcrypt('password'), // password
                'remember_token' => Str::random(10),
                'phone'=> "080127160258",
            ],
            [
                'name' => "John Doe",
                'email' => "johndoe@gmail.com",
                'email_verified_at' => now(),
                'password' => bcrypt('password'), // password
                'remember_token' => Str::random(10),
                'phone'=> "080427160258",
            ],
        ];

        foreach ($users as $key => $value) {
            $already_exist = User::where("email", $value['email'])->first();
            if($already_exist == null){
                $user = new User();
                $user->name = $value['name'];
                $user->email = $value['email'];
                $user->email_verified_at = $value['email_verified_at'];
                $user->password = $value['password'];
                $user->remember_token = $value['remember_token'];
                $user->phone = $value['phone'];
                $user->save();
            }
        }
    }
}
