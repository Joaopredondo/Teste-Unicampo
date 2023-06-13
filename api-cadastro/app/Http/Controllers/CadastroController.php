<?php

namespace App\Http\Controllers;

use App\Models\Cadastro;

use Illuminate\Http\Request;

/**
 * @OA\Get(
 *     path="/api/users",
 *     @OA\Response(response="200", description="An example endpoint")
 * )
 */
class CadastroController extends Controller

{
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cadastro = Cadastro::make($request->all(), [
            'nome_completo' => 'required',
            'data_nascimento' => 'required|date',
            'tipo_pessoa' => 'required|in:Física,Jurídica',
            'cpf_cnpj' => 'required|unique:cadastros',
            'email' => 'required|email|unique:cadastros',
            'endereco' => 'required',
            'cep' => 'required',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ]);
    
        $messages = [
            'required' => 'O campo :attribute é obrigatório.',
            'date' => 'O campo :attribute deve ser uma data válida.',
            'in' => 'O valor do campo :attribute é inválido.',
            'unique' => 'O valor do campo :attribute já está em uso.',
            'email' => 'O campo :attribute deve ser um endereço de e-mail válido.',
            'numeric' => 'O campo :attribute deve ser um número.',
        ];
    
        $cadastro->setMessages($messages);
    
        if ($cadastro->fails()) {
            return response()->json(['errors' => $cadastro->errors()], 400);
        }
    
        $cadastro = Cadastro::create($request->all());
    
        return response()->json(['message' => 'Cadastro criado com sucesso', 'cadastro' => $cadastro], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
