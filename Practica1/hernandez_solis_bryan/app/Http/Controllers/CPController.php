<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CPController extends Controller
{
    //
    public function verCodigoPos(Request $request)
    {
        $codigos = Codigop::where('codigo', $request->codigo)->get();
        return view('colonia', ['codigos'=>$codigos]);
    }
    public function estadoCP($id){
        $municipio = Codigop::where('id', $id)->get();
        
        return view('estado', ['municipio'=>$municipio]);
        
    }
}
