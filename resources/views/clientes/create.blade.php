<x-app-layout>
    <head>
        <title>Novo Cliente</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-black leading-tight">
            {{ __('Cadastrar Clientes') }}
        </h2>
    </x-slot>
    @if(session('success'))
        <div class="alert-success" role="alert">
            <strong>Sucesso!</strong>
            <span>{{ session('success') }}</span>
        </div>
    @endif
    <body>
        <div class="container">
            <h1>Novo Cliente</h1>
            <form action="{{ route('clientes.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" required>
                </div>
                <div class="form-group">
                    <label for="cpf">CPF:</label>
                    <input type="number" name="cpf" required>
                </div>
                <div class="form-group">
                    <label for="telefone">Telefone:</label>
                    <input type="number" name="telefone" required>
                </div>
                <div class="form-group">
                    <label for="sexo">Sexo:</label>
                    <input type="text" name="sexo" required>
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
                    <select class="form-control" name="pedido_id">
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
    </body>
</x-app-layout>
