<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        DB::table('users')->insert([
            [
                'name' =>$email ='SuperAdmin',
                'email' => strtolower($email).'@gmail.com',
                'user_type' => 'super-admin',
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'is_active' => 1,
                'admin_comment' =>'Lorem Ipsum is simply dummy text of the printing and typesetting industry',
                'remember_token' => Str::random(10),
                'created_at' => Carbon::now()->toDateTimeLocalString(),
            ],
            [
                'name' =>$email ='Admin',
                'email' => strtolower($email).'@gmail.com',
                'user_type' => 'admin',
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'is_active' => 1,
                'admin_comment' =>'Lorem Ipsum is simply dummy text of the printing and typesetting industry',
                'remember_token' => Str::random(10),
                'created_at' => Carbon::now()->toDateTimeLocalString(),
            ],
            [
                'name' =>$email ='Vendor',
                'email' => strtolower($email).'@gmail.com',
                'user_type' => 'Vendor',
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'is_active' => 1,
                'admin_comment' =>'Lorem Ipsum is simply dummy text of the printing and typesetting industry',
                'remember_token' => Str::random(10),
                'created_at' => Carbon::now()->toDateTimeLocalString(),
            ],
            [
                'name' =>$email ='Developer',
                'email' => strtolower($email).'@gmail.com',
                'user_type' => 'Developer',
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'is_active' => 1,
                'admin_comment' =>'Lorem Ipsum is simply dummy text of the printing and typesetting industry',
                'remember_token' => Str::random(10),
                'created_at' => Carbon::now()->toDateTimeLocalString(),
            ],
            [
                'name' =>$email ='Editor',
                'email' => strtolower($email).'@gmail.com',
                'user_type' => 'Editor',
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'is_active' => 1,
                'admin_comment' =>'Lorem Ipsum is simply dummy text of the printing and typesetting industry',
                'remember_token' => Str::random(10),
                'created_at' => Carbon::now()->toDateTimeLocalString(),
            ],
            [
                'name' =>$email ='Customer',
                'email' => strtolower($email).'@gmail.com',
                'user_type' => 'Customer',
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'is_active' => 1,
                'admin_comment' =>'Lorem Ipsum is simply dummy text of the printing and typesetting industry',
                'remember_token' => Str::random(10),
                'created_at' => Carbon::now()->toDateTimeLocalString(),
            ],
            [
                'name' =>$email ='AnotherCustomer',
                'email' => strtolower($email).'@gmail.com',
                'user_type' => 'Customer',
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'is_active' => 1,
                'admin_comment' =>'Lorem Ipsum is simply dummy text of the printing and typesetting industry',
                'remember_token' => Str::random(10),
                'created_at' => Carbon::now()->toDateTimeLocalString(),
            ],
        ]);
    }
}
