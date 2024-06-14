<x-app-layout>
    <head>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <title>Novo Pedido</title>
    </head>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-black leading-tight">
            {{ __('Cadastrar Pedido') }}
        </h2>
    </x-slot>

    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">Sucesso!</strong>
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    @endif

    <body>
        <div class="container">
            <h1>Novo Pedido</h1>
            <form action="{{ route('pedidos.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="valor_total">Valor Total:</label>
                    <input type="number" name="valor_total" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="previsao_entrega">Previsão de Entrega:</label>
                    <input type="date" name="previsao_entrega" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="preco_venda">Preço de Venda:</label>
                    <input type="number" name="preco_venda" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="observacao">Observação:</label>
                    <input type="text" name="observacao" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="servicos_id">Serviço:</label>
                    <select class="form-control" name="servicos_id" required>
                        <option value="">Selecione um serviço</option>
                        @foreach($servicos as $servico)
                            <option value="{{ $servico->id }}">{{ $servico->nome_servico }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="{{ route('pedidos.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>    
        </div>
    </body>
</x-app-layout>
