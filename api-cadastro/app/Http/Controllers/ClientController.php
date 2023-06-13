<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function store(Request $request)
    {
        // Valide os dados recebidos
        $validatedData = $request->validate([
            'nome' => 'required',
            'email' => 'required|email|unique:clients',
            'telefone' => 'required',
        ]);
        
        $client = Client::create($validatedData);

        return response()->json(['message' => 'Cliente criado com sucesso', 'client' => $client], 201);
    }
}
