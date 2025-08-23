<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contacts')->insert([
            'nome' => 'João da Silva',
            'email' => 'joao@exemplo.com',
            'telefone' => '99999999',
            'data_nascimento' => '1990-05-15',
        ]);

        DB::table('contacts')->insert([
            'nome' => 'Pedro',
            'email' => 'pedro@exemplo.com',
            'telefone' => '99999999',
            'data_nascimento' => '1990-02-14',
        ]);
    }
}
