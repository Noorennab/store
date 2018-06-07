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

        $role=new \App\Role();
        $role->id=1;
        $role->name='admin';
        $role->save();

        $role=new \App\Role();
        $role->id=2;
        $role->name='store';
        $role->save();

        $user= new \App\User();
        $user->id=1;
        $user->name='admin';
        $user->email='admin@store.ly';
        $user->password= \Hash::make('admin');
        $user->role_id=1;
        $user->phone=36486548;
        $user->save();

        $user= new \App\User();
        $user->name='store';
        $user->id=2;
        $user->email='store@store.ly';
        $user->password= \Hash::make('store');
        $user->role_id=2;
        $user->phone=364865483;
        $user->save();


        $store= new \App\Store();
        $store->user_id=2;
        $store->name='store';
        $store->phone=364865483;
        $store->save();
    }
}
