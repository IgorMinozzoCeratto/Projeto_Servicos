<x-app-layout>
    <head>
        <title>Novo Pedido</title>
    </head>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Cadastrar Pedidos') }}
        </h2>
    </x-slot>
    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
        <strong class="font-bold">Sucesso!</strong>
        <span class="block sm:inline">{{ session('success') }}</div>
        </div>
    @endif
    <body>
        <div class="container">
            <h1>Novo Pedido</h1>
            <form action="{{ route('pedidos.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="valor_total">valor_total:</label>
                    <input type="number" name="valor_total" required>
                </div>
                <div class="form-group">
                    <label for="previsao_entrega">previsao_entrega:</label>
                    <input type="date" name="previsao_entrega" required>
                </div>
                <div class="form-group">
                    <label for="preco_venda">preco_venda:</label>
                    <input type="number" name="preco_venda" required>
                </div>
                <div class="form-group">
                    <label for="observacao">observacao:</label>
                    <input type="text" name="observacao" required>
                </div>
                <div class="form-group">
                <label for="servico_id">Servico</label>
                <select class="form-control" name="servico_id" required>
                    <option value="">Selecione um servico</option>
                    @foreach($servicos as $servico)
                        <option value="{{ $servico->id }}">{{ $servico->nome_servico}}</option>
                    @endforeach
                </select>
                </div>
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="{{ route('pedidos.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>    
        </div>
    </body>
</x-app-layout>