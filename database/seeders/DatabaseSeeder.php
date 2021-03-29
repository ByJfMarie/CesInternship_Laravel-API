<?php

namespace Database\Seeders;

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
        \App\Models\Role::factory(1)->create([
            'name' => 'Student',
        ]);
        \App\Models\Role::factory(1)->create([
            'name' => 'Delegate',
        ]);
        \App\Models\Role::factory(1)->create([
            'name' => 'Pilote',
        ]);
        \App\Models\Role::factory(1)->create([
            'name' => 'Admin',
        ]);
        \App\Models\City::factory(30)->create();
        \App\Models\Company::factory(10)->create();
        \App\Models\Offers::factory(10)->create();
        
        // \App\Models\User::factory(10)->create();
    }
}
