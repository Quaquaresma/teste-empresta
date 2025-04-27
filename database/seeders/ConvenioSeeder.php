<?php

namespace Database\Seeders;

use App\Models\Convenio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConvenioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $convenios =[ 
            [
                "chave" => "INSS",
                "valor" => "INSS",
            ],
            [
                "chave" => "FEDERAL",
                "valor" => "Federal",
            ],
            [
                "chave" => "SIAPE",
                "valor" => "Siape",
            ]
        ];
        Convenio::insert($convenios);
    }
}
