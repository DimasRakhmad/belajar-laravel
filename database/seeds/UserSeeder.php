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
        //
        DB::table('user')->insert([
            'name' => 'dimas',
            'email' => 'dimas@gmail.com',
            'password' => bcrypt('secret'),
            'level' => 'admin',
            'phone' => '085923459',
            'addres' => 'asjjeldfifffff',
        ]);
    }
}
