<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Instituicao;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;

class InstituicaoController extends Controller
{
    
    public function index(Request $request): JsonResponse {
        return response()->json(Instituicao::all());
    }
}
