<x-app-layout>
    <x-slot name="header">
    <link rel="stylesheet" href="{{ asset('css/list.css') }}">

        <h2 class="font-semibold text-xl text-black leading-tight">
            {{ __('Lista Pedidos') }}
        </h2>
    </x-slot>
    <div class="container">
        <a href="{{ route('pedidos.create') }}" class="btn btn-primary">Novo Pedido</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>valor_total</th>
                    <th>previsao_entrega</th>
                    <th>preco_venda</th>
                    <th>observacao</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pedidos as $pedido)
                    <tr>
                        <td class="colunas">{{ $pedido->id }}</td>
                        <td id="nome">{{ $pedido->valor_total }}</td>
                        <td class="colunas">{{ date_format(new DateTime($pedido->previsao_entrega), 'd/m/Y') }}</td>
                        <td>{{ $pedido->preco_venda }}</td>
                        <td>{{ $pedido->observacao }}</td>
                        <td>
                            <a href="{{ route('pedidos.show', $pedido->id) }}" class="btn btn-info">Detalhes</a>
                            <a href="{{ route('pedidos.edit', $pedido->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('pedidos.destroy', $pedido->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <br>
        
        <br>
    </div>
</x-app-layout>

