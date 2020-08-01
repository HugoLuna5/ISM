<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DefaultConfig extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('settings')->insert([
            'name' => 'ISM',
            'logo' => 'default.png',
            'email' => 'hugodariolc@gmail.com',
            'phone' => '7891005104',
            'direction' => 'Quinta minero S/N Col. El Rastro. 92124 Tantoyuca, Ver. Mex.',
        ]);



        DB::table('account_types')->insert([
            'name' => 'admin',
        ]);

        DB::table('account_types')->insert([
            'name' => 'user',
        ]);


        User::create([
            'name' => 'Admin',
            'last_name' => 'Admin',
            'account_type' => 1,
            'email' => 'admin@ismapp.com.mx',
            'password' => Hash::make('12345678'),
        ]);






    }
}
