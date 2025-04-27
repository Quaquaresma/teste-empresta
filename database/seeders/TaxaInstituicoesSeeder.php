<?php

namespace Database\Seeders;

use App\Models\TaxaInstituicao;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaxaInstituicoesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $taxas = [
            [
                "parcelas" => 72,
                "taxaJuros" => 2.05,
                "coeficiente" => 0.02604,
                "instituicao_id" => 3,
                "convenio_id" => 1
            ],
            [
                "parcelas" => 60,
                "taxaJuros" => 2.05,
                "coeficiente" => 0.03015,
                "instituicao_id" => 3,
                "convenio_id" => 1
            ],
            [
                "parcelas" => 48,
                "taxaJuros" => 2.05,
                "coeficiente" => 0.03529,
                "instituicao_id" => 3,
                "convenio_id" => 1
            ],
            [
                "parcelas" => 36,
                "taxaJuros" => 2.05,
                "coeficiente" => 0.04719,
                "instituicao_id" => 3,
                "convenio_id" => 1
            ],
            [
                "parcelas" => 84,
                "taxaJuros" => 1.9,
                "coeficiente" => 0.024384,
                "instituicao_id" => 3,
                "convenio_id" => 1
            ],
            [
                "parcelas" => 48,
                "taxaJuros" => 2.05,
                "coeficiente" => 0.03429,
                "instituicao_id" => 1,
                "convenio_id" => 1
            ],
            [
                "parcelas" => 72,
                "taxaJuros" => 2.08,
                "coeficiente" => 0.02843,
                "instituicao_id" => 1,
                "convenio_id" => 1
            ],
            [
                "parcelas" => 36,
                "taxaJuros" => 2.10,
                "coeficiente" => 0.03125,
                "instituicao_id" => 1,
                "convenio_id" => 2
            ],
            [
                "parcelas" => 60,
                "taxaJuros" => 2.05,
                "coeficiente" => 0.03035,
                "instituicao_id" => 2,
                "convenio_id" => 1
            ],
            [
                "parcelas" => 72,
                "taxaJuros" => 2.08,
                "coeficiente" => 0.02843,
                "instituicao_id" => 2,
                "convenio_id" => 1
            ]
        ];

        TaxaInstituicao::insert($taxas);
    }
}
