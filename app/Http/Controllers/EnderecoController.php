<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Endereco;

class EnderecoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $enderecos = Endereco::all();
        return view('enderecos.index', compact('enderecos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('enderecos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $endereco = new Endereco([
            'cidade' => $request->input('cidade'),
            'rua' => $request->input('rua'),
            'bairro' => $request->input('bairro'),
            'estado' => $request->input('estado'),
            'cep' => $request->input('cep')
        ]);

        $endereco->save();

        return redirect()->route('enderecos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $endereco = Endereco::findOrFail($id);
        return view('enderecos.show', compact('endereco'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $endereco = Endereco::findOrFail($id);
        return view('enderecos.edit', compact('endereco'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $endereco = Endereco::findOrFail($id);
        $endereco->update($request->all());
        
        return redirect()->route('enderecos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $endereco = Endereco::findOrFail($id);
        $endereco->delete();
        return redirect()->route('enderecos.index');
    }
}
