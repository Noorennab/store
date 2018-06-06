<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user= new \App\User();
        $user->name='admin';
        $user->email='admin@store.ly';
        $user->password=\Illuminate\Support\Facades\Hash::make('admin');
    }
}
