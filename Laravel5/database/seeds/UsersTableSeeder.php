<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user01 = new App\User();
        $user01->name ='Ruk';
        $user01->email = 'ruksergo1@gmail.com';
        $user01->password = Hash::make('123456');
        $user01->save();
    }
}
