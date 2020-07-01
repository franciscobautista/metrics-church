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

        $this->call(CompaniesTableSeeder::class);
        $this->command->info('Companies table seeded!');

        $this->call(UserCompaniesTableSeeder::class);
        $this->command->info('UserCompanies table seeded!');
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

class CompaniesTableSeeder extends Seeder {
    public function run()
    {
        DB::table('companies')->insert([
            [
                'name' => 'Empresa demo',
                'email' => 'info@empresa.com',
            ]
        ]);
    }
}

class UserCompaniesTableSeeder extends Seeder {
    public function run()
    {
        DB::table('user_companies')->insert([
            [
                'user_id' => 1,
                'company_id' => 1,
            ]
        ]);
    }
}