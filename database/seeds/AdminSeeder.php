<?php

use App\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin', 
            'email' => 'admin@coltd.com', 
            'password' => Hash::make('admin'), 
            'login' => 'admin'
        ]);
    }
}
