<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'PC Gamer Ryzen 5 5600X',
                'price' => 4200.00,
                'description' => "PC com Ryzen 5 5600X, 16GB DDR4, SSD 512GB NVMe e NVIDIA RTX 3060. Ótimo desempenho para jogos modernos.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'PC Workstation Ryzen 7 5800X',
                'price' => 5800.00,
                'description' => "Estação de trabalho com Ryzen 7 5800X, 32GB DDR4, SSD 1TB NVMe e NVIDIA RTX 3070. Ideal para profissionais.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'PC Compacto Ryzen 3 3200G',
                'price' => 2200.00,
                'description' => "PC compacto com Ryzen 3 3200G (vídeo integrado), 8GB DDR4 e SSD 240GB. Ideal para uso básico.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'PC Gamer Ryzen 9 5900X',
                'price' => 7500.00,
                'description' => "PC top de linha com Ryzen 9 5900X, 32GB DDR4, SSD 1TB NVMe e NVIDIA RTX 3080. Perfeito para gamers exigentes.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'PC Multimídia Ryzen 5 3400G',
                'price' => 3000.00,
                'description' => "PC para multimídia com Ryzen 5 3400G (vídeo integrado), 16GB DDR4 e SSD 512GB.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'PC Ryzen 7 3700X',
                'price' => 4800.00,
                'description' => "Computador com Ryzen 7 3700X, 16GB DDR4, SSD 512GB e NVIDIA GTX 1660 Super. Bom para jogos e produtividade.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'PC Ryzen 5 3600',
                'price' => 3900.00,
                'description' => "PC equilibrado com Ryzen 5 3600, 16GB DDR4, SSD 512GB e NVIDIA GTX 1650. Versátil para várias tarefas.",
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
