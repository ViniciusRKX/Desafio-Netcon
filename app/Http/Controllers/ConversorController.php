<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConversorController extends Controller
{
    public function quilometrosParaAnosLuz(Request $request)
    {
        $request->validate([
            'quilometros' => 'required|numeric|min:0',
        ]);

        $anosLuz = $request->quilometros / 9460730472580.8;

        return response()->json([
            'anosLuz' => round($anosLuz, 4)
        ], 200);
    }

    public function anosLuzParaQuilometros(Request $request)
    {
        $request->validate([
            'anosLuz' => 'required|numeric|min:0',
        ]);

        $quilometros = $request->anosLuz * 9460730472580.8;

        return response()->json([
            'quilometros' => round($quilometros, 4)
        ], 200);
    }
}
