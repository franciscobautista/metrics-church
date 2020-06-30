<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PeopleTableSeeder::class);
        $this->command->info('People table seeded!');

        $this->call(UsersTableSeeder::class);
        $this->command->info('Users table seeded!');
    }
}


class PeopleTableSeeder extends Seeder {

    public function run()
    {
        DB::table('people')->insert(array(
            [
                'id' => 1,
                'first_name' => 'Mario',
                'last_name' => 'Bautista',
                'gender' => 'M'
            ]
        ));
    }
}

class UsersTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->insert([
            [
                'person_id' => 1,
                'email' => 'fmariobh@gmail.com',
                'password' => \Hash::make('mario2020'),
                'status' => 'active',
                'type' => 'Superadmin'
            ]
        ]);
    }
}