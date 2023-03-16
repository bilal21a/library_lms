<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create roles
        $roles = [
            ['name' => 'admin'],
            ['name' => 'student'],
            ['name' => 'librarian'],
            ['name' => 'faculty'],
        ];

        Role::create($roles);    }
}
