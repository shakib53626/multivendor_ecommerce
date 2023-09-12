<?php

namespace Database\Seeders;

use App\Models\Seller;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SellersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Seller::create([
            'name' => 'Seller',
            'email' => 'seller@gmail.com',
            'phone' => '01784801668',
            'password' => Hash::make('password'),
        ]);
    }
}
