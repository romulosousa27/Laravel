<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
         
        App\User::create([
            'name' => 'Romulo Sousa',
            'email' => 'romulosousa27@hotmail.com',
            'password' => bcrypt('123456789')
        ]);
    }
}
