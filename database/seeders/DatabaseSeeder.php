<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Usuário fixo superadmin
        User::factory()->create([
            'name' => 'Super Admin',
            'email' => 'super@admin.com',
            'password' => Hash::make('password'),
            'role' => 'superadmin',
        ]);

        // Usuário fixo admin
        User::factory()->create([
            'name' => 'Administrador',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

        // Usuário fixo customer
        User::factory()->create([
            'name' => 'Cliente Teste',
            'email' => 'customer@teste.com',
            'password' => Hash::make('password'),
            'role' => 'customer',
        ]);

        // Usuário fixo employee
        User::factory()->create([
            'name' => 'Funcionário Teste',
            'email' => 'employee@teste.com',
            'password' => Hash::make('password'),
            'role' => 'employee',
        ]);

        // Caso queira vários usuários randômicos depois
        User::factory(10)->create();
    }
}

