<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Boneco Luva de Pedreiro',
                'description' => 'Um boneco para tributar.',
                'price' => 199.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Caneca Itachi Uchiha',
                'description' => 'Caneca personagem naruto',
                'price' => 150.90,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Garrafa Térmica 500ml',
                'description' => 'Mantém líquidos quentes por até 12 horas.',
                'price' => 79.90,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
        
    }
    
}
