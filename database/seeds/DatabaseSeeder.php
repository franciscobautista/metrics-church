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
        
        $this->call(OrganizationsTableSeeder::class);
        $this->command->info('Organizations table seeded!');

        $this->call(RolesTableSeeder::class);
        $this->command->info('Roles table seeded!');

        $this->call(PeopleTableSeeder::class);
        $this->command->info('People table seeded!');

        $this->call(UsersTableSeeder::class);
        $this->command->info('Users table seeded!');

        $this->call(OrganizationUsersTableSeeder::class);
        $this->command->info('OrganizationUsers table seeded!');

        $this->call(PermissionsTableSeeder::class);
        $this->command->info('Permissions table seeded!');

        $this->call(SubcategoriesTableSeeder::class);
        $this->command->info('Subcategories table seeded!');
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
                'gender' => 'M',
                'photo' => 'blank.png'
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
                'password' => \Hash::make('mario2021'),
                'status' => 'active',
            ]
        ]);
    }
}

class OrganizationsTableSeeder extends Seeder {
    public function run()
    {
        DB::table('organizations')->insert([
            [
                'name' => 'Company demo',
                'email' => 'info@empresa.com',
            ]
        ]);
    }
}

class OrganizationUsersTableSeeder extends Seeder {
    public function run()
    {
        DB::table('organization_users')->insert([
            [
                'user_id' => 1,
                'organization_id' => 1,
                'rol_id' => 1
            ]
        ]);
    }
}
class RolesTableSeeder extends Seeder {
    public function run()
    {
        DB::table('roles')->insert([
            [
                //'organization_id' => 1,
                'name' => 'Admin',
                'special' => 'all-access'
            ],
            [
                'name' => 'Staff',
                'special' => null
            ],
            [
                'name' => 'Voluntario',
                'special' => null
            ]
        ]);
    }
}

class PermissionsTableSeeder extends Seeder {
    public function run()
    {
        DB::table('permissions')->insert([
            [
                'name' => 'Administrar configuración de la iglesia',
                'slug' => 'configurar_iglesia'
            ],
            [
                'name' => 'Ingresar datos',
                'slug' => 'ingresar_datos'
            ],
            [
                'name' => 'Ver gráficas',
                'slug' => 'ver_graficas'
            ],
            [
                'name' => 'Crear reportes',
                'slug' => 'crear_reportes'
            ]
            
        ]);
    }
}

class SubcategoriesTableSeeder extends Seeder {
    public function run()
    {
        DB::table('subcategories')->insert([
            [ 'name' => 'Asistencias','organization_id' => 1],
            [ 'name' => 'Contribuciones','organization_id' => 1],
            [ 'name' => 'Salvaciones','organization_id' => 1],
            [ 'name' => 'Voluntarios','organization_id' => 1],
        ]);
    }
}
