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
         $user = factory(App\User::class)->create([
             'username' => 'admin',
             'email' => 'admin@gmail.com',
             'password' => bcrypt('admin'),
             'lastname' => 'Ms',
             'firstname' => 'admin'
         ]);
        // $country = factory(App\Country::class)->create([
        //     'country_code' => 'CN',
        //     'name' => 'China',
        // ]);
        // $department = factory(App\Department::class)->create([
        //     'name' => 'IT',
        // ]);
    }
}
