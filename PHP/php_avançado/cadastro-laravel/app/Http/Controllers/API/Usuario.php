<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Usuario as UsuarioModel;
use Illuminate\Http\Request;

class Usuario extends Controller
{
    public function salvar(Request $request)
    {
        if(UsuarioModel::cadastrar($request))
            return response("ok", 201);
        else
            return  response("erro", 409);
        //dd($request->all());
    }
}
