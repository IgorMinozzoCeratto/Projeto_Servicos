<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Funcionario;
use App\Models\Endereco;
use App\Models\Pedido;

class FuncionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $funcionarios = Funcionario::all();
        return view('funcionarios.index', compact('funcionarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $enderecos = Endereco::all();
        $pedidos = Pedido::all();
        return view('funcionarios.create', compact('enderecos', 'pedidos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $funcionario = new Funcionario([
            'nome' => $request->input('nome'),
            'cpf' => $request->input('cpf'),
            'telefone' => $request->input('telefone'),
            'sexo' => $request->input('sexo'),
            'endereco_id' => 'required|exists:enderecos,id',
            'pedido_id' => 'required|exists:pedidos,id'
        ]);

        $funcionario->save();

        return redirect()->route('funcionarios.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $funcionario = Funcionario::findOrFail($id);
        return view('funcionarios.Show', compact('funcionario'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $funcionario = Funcionario::findOrFail($id);
        $enderecos = Endereco::all();
        $pedidos = Pedido::all();
        return view('funcionarios.edit', compact('funcionario', 'enderecos', 'pedidos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $funcionario = Funcionario::findOrFail($id);
        $funcionario->nome = $request->input('nome');
        $funcionario->cpf = $request->input('cpf');
        $funcionario->telefone = $request->input('telefone');
        $funcionario->sexo = $request->input('sexo');
        return view('funcionarios.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $funcionario = Funcionario::findOrFail($id);
        $funcionario->delete();
        return view('funcionarios.index');
    }
}