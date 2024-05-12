<x-app-layout>
    <head>
        <link rel="stylesheet" href="{{ asset('css/autores/edit.css') }}">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Editar Pedidos</title>
    </head>
    <body>
        <div class="container">
            <h1>Editar Cliente</h1>
            <form action="{{ route('pedidos.update', $pedido->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="valor_total">valor_total:</label>
                    <input type="text" name="valor_total" value="{{ $pedido->valor_total }}">
                </div>
                <div class="form-group">
                    <label for="previsao_entrega">previsao_entrega:</label>
                    <input type="date" name="previsao_entrega" value="{{ $pedido->previsao_entrega }}">
                </div>
                <div class="form-group">
                    <label for="preco_venda">preco_venda:</label>
                    <input type="number" name="preco_venda" value="{{ $pedido->preco_venda }}">
                </div>
                <div class="form-group">
                    <label for="observacao">observacao:</label>
                    <input type="text" name="observacao" value="{{ $pedido->observacao }}">
                </div>
                <div class="form-group">
                <label for="servico_id">Servico</label>
                <select class="form-control" name="servico_id" required>
                    <option value="">Selecione um servico</option>
                    @foreach($servicos as $servico)
                        <option value="{{ $servico->id }}" {{ $servico->id == $pedido->servico_id ? 'selected' : ''}}>{{ $servico->nome_servico}}</option>
                    @endforeach
                </select>
                </div>
                <button type="submit" class="btn btn-success">Salvar Alterações</button>
                <a href="{{ route('pedidos.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </body>
</x-app-layout>
