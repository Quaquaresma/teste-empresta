<?php

namespace Database\Seeders;

use App\Models\Instituicao;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InstituicaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $instituicoes =[ 
            [
                "chave" => "PAN",
                "valor" => "Pan",
            ],
            [
                "chave" => "OLE",
                "valor" => "Ole",
            ],
            [
                "chave" => "BMG",
                "valor" => "Bmg",
            ]
        ];
        Instituicao::insert($instituicoes);
        
    }
}
