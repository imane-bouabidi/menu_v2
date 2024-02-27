<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;

class adminSeeder extends Seeder
{

    public function run()
    {
        // Create admin user
        $admin = User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('admin'), // Use bcrypt to hash the password
        ]);

        // Assign admin role to the user
        $admin->assignRole('admin');
    }
}
