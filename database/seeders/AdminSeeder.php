<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin BEM REMA',
            'email' => 'admin@bemrema.upi.ac.id',
            'password' => Hash::make('pagaroren123'),
            'email_verified_at' => now(),
        ]);

        $this->command->info('✅ Admin user created successfully!');
        $this->command->info('📧 Email: admin@bemrema.upi.ac.id');
        $this->command->info('🔑 Password: pagaroren123');
    }
}
