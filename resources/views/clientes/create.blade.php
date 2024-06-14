<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-black leading-tight">
            {{ __('Cadastrar Cliente') }}
        </h2>
    </x-slot>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">Sucesso!</strong>
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    @endif

    <div class="container">
        <h1>Novo Cliente</h1>
        <form action="{{ route('clientes.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="cpf">CPF:</label>
                <input type="number" name="cpf" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="number" name="telefone" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="sexo">Sexo:</label>
                <input type="text" name="sexo" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="endereco_id">Endereço:</label>
                <select class="form-control" name="endereco_id" required>
                    <option value="">Selecione um endereço</option>
                    @foreach($enderecos as $endereco)
                        <option value="{{ $endereco->id }}">{{ $endereco->cidade }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="pedido_id">Pedido:</label>
                <select class="form-control" name="pedido_id" required>
                    <option value="">Selecione um pedido</option>
                    @foreach($pedidos as $pedido)
                        <option value="{{ $pedido->id }}">{{ $pedido->id }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-success">Salvar</button>
            <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>    
    </div>
</x-app-layout>
