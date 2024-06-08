<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Endereco;
use App\Models\Pedido;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Obtém todos os autores do banco de dados usando o model 'Cliente'
        $clientes = Cliente::all();
        //Retorna a view 'clientes.index'
        return view('clientes.index', compact('clientes'));
    }

    /**
     * Método para exibir formulario de criação
     */
    public function create()
    {
        $servicos = Servico::all();
        $enderecos = Endereco::all();
        $pedidos = Pedido::all();
        return view('clientes.create', compact('enderecos', 'pedidos', 'servicos'));
    }

    /**
     * Cria uma nova instancia do model com os dados fornecidos no request
     */
    public function store(Request $request)
    {
        $cliente = new Cliente([
            'nome' => $request->input('nome'),
            'cpf' => $request->input('cpf'),
            'telefone' => $request->input('telefone'),
            'sexo' => $request->input('sexo'),
            'endereco_id' => $request->input('enderecos,id'),
            'servico_id' => $request->input('servico_id')
        ]);

        $cliente->save();

        return redirect()->route('clientes.index'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('clientes.show', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cliente = Cliente::findOrFail($id);
        $enderecos = Endereco::all();
        $pedidos = Pedido::all();
        return view('clientes.edit', compact('cliente', 'enderecos', 'pedidos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->update($request->all());
        return view('clientes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();
        return view('clientes.index');
    }
}
