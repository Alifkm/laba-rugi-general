<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(100)->create();
        
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
        $this->call(AdminTypeSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(TransactionTypeSeeder::class);
        $this->call(ProfitLossComponent::class);
        $this->call(TransactionSourceSeeder::class);
        $this->call(TransactionIncomeSeeder::class);
        $this->call(TransactionOutcomeSeeder::class);
    }
}
