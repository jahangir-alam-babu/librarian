<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'username' => "admin",
            'email' => "admin@demo.com",
            'password' => Hash::make('12345678'),
        ]);

        // DB::table('students')->insert([
        //     'Student_ID' => '',
        //     'Name' => '',
        //     'Session' => '',
        //     'Contact_no' => '',
        //     'Image' => '',
        //     'username' => "admin",
        //     'Email' => "admin@demo.com",
        //     'password' => Hash::make('12345678'),
        //     'Verify' => '',
        //     'Confirmation_Code' => '',
        // ]);

        $this->command->info('User added succesfully');
    }
}
