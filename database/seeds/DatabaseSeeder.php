<?php

use App\Brand;
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
        $store->name='store';
        $store->user_id=2;
        $store->store_locate= 'الظهرة';
        $store->map_locate='';
        $store->fb_page='http://facebook.ocm';
        $store->phone=364865483;
        $store->save();



        $brand = new Brand();
        $brand->id = 2;
        $brand->name = 'Apple';
        $brand->save();

        $brand = new Brand();
        $brand->id = 3;
        $brand->name = 'Samsung';
        $brand->save();

        $brand = new Brand();
        $brand->id = 4;
        $brand->name = 'Huawei';
        $brand->save();


        $brand = new \App\Type();
        $brand->id = 2;
        $brand->name = 'cheque';
        $brand->save();

        $brand = new \App\Type();
        $brand->id = 3;
        $brand->name = 'credit card';
        $brand->save();

        $brand = new \App\Type();
        $brand->id = 4;
        $brand->name = 'cash';
        $brand->save();


        $brand = new \App\Size();
        $brand->id = 2;
        $brand->value = '8';
        $brand->save();

        $brand = new \App\Size();
        $brand->id = 3;
        $brand->value = '16';
        $brand->save();

        $brand = new \App\Size();
        $brand->id = 4;
        $brand->value = '32';
        $brand->save();

        $brand = new \App\Size();
        $brand->id = 5;
        $brand->value = '64';
        $brand->save();



        $brand = new \App\Status();
        $brand->id = 2;
        $brand->name = 'acceptable';
        $brand->save();

        $brand = new \App\Status();
        $brand->id = 3;
        $brand->name = 'good';
        $brand->save();

        $brand = new \App\Status();
        $brand->id = 4;
        $brand->name = 'excellent';
        $brand->save();

        $brand = new \App\Status();
        $brand->id = 5;
        $brand->name = 'new';
        $brand->save();



        $brand = new \App\color();
        $brand->id = 2;
        $brand->name = 'white';
        $brand->save();

        $brand = new \App\color();
        $brand->id = 3;
        $brand->name = 'red';
        $brand->save();

        $brand = new \App\color();
        $brand->id = 4;
        $brand->name = 'black';
        $brand->save();

        $brand = new \App\color();
        $brand->id = 5;
        $brand->name = 'gold';
        $brand->save();




    }
}
