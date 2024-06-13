<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;
use App\Models\Servico;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pedidos = Pedido::all();
        return view('pedidos.index', compact('pedidos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $servicos = \App\Models\Servico::all();
        return view('pedidos.create', compact('servicos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $pedido = new Pedido([
            'valor_total' => $request->input('valor_total'),
            'previsao_entrega' => $request->input('previsao_entrega'),
            'preco_venda' => $request->input('preco_venda'),
            'observacao' => $request->input('observacao'),
            'servico_id' => $request->input('servicos,id'),
        ]);

        $pedido->save();

        return redirect()->route('pedidos.index'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pedido = Pedido::findOrFail($id);
        return view('pedidos.show', compact('pedido'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pedido = Pedido::findOrFail($id);
        $servicos = Servico::all();
        return view('pedidos.edit', compact('pedido', 'servicos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pedido = Pedido::findOrFail($id);
        $pedido->update($request->all());
        return view('pedidos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pedido = Pedido::findOrFail($id);
        $pedido->delete();
        return view('pedidos.index');
    }
}
