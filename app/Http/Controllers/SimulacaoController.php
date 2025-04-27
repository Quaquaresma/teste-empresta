<?php

namespace App\Http\Controllers;

use App\Models\Convenio;
use App\Models\Instituicao;
use App\Models\TaxaInstituicao;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class SimulacaoController extends Controller
{
    public function simulaCredito(Request $request): JsonResponse {
        $valorEmprestimo = $request->input("valor_emprestimo");

        $parcela = NULL;
        if ($request->filled("parcela")) {
            $parcela = $request->input("parcela");
        }
        
        $instituicoes = NULL;
        $instituicoes = Instituicao::all()->groupBy('id');
        if ($request->filled("instituicoes")) {
            $instituicoes = Instituicao::whereIn("chave", $request->input("instituicoes"))->get()->groupBy('id');
        };

        $convenios = NULL;
        $convenios = Convenio::all()->groupBy('id');
        if ($request->filled("convenios")) {
            $convenios = Convenio::whereIn("chave", $request->input("convenios"))->get()->groupBy('id');
        };

        $taxaInstituicoes = TaxaInstituicao::all();

        if ($parcela != NULL) {
            $taxaInstituicoes = $taxaInstituicoes->whereIn('parcelas', $parcela);
        }

        if ($instituicoes != NULL) {
            $taxaInstituicoes = $taxaInstituicoes->whereIn('instituicao_id', $instituicoes->keys());
        }

        if ($convenios != NULL) {
            $taxaInstituicoes = $taxaInstituicoes->whereIn('convenio_id', $convenios->keys());
        }

        $valoresCredito = array();
        foreach ($taxaInstituicoes as $taxaInstituicao) {
            array_push($valoresCredito, [
                'taxaJuros' => $taxaInstituicao['taxaJuros'],
                'parcelas' => $taxaInstituicao['parcelas'],
                'valor_parcela' => ($valorEmprestimo * $taxaInstituicao['coeficiente']) / $taxaInstituicao['parcelas'],
                'convenio' => $convenios->get($taxaInstituicao['convenio_id'])[0]['valor'],
                'instituicao' => $instituicoes->get($taxaInstituicao['instituicao_id'])[0]['valor'],
            ]);
        }
        
        $valoresCredito = collect($valoresCredito);
        
        return response()->json($valoresCredito->mapToGroups(function( array $item, int $key) {
            return [$item['instituicao'] => [
                'taxaJuros' => $item['taxaJuros'],
                'parcelas' => $item['parcelas'],
                'valor_parcela' => round($item['valor_parcela'], 2),
                'convenio' => $item['convenio'],
            ]];
        })->all());

    }
}
