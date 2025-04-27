<?php

namespace App\Http\Controllers;

use App\Models\Convenio;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class ConvenioController extends Controller
{
    public function index(Request $request): JsonResponse {
        return response()->json(Convenio::all());
    }
}
