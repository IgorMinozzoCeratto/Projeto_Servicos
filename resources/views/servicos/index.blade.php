<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Lista Servicos') }}
        </h2>
    </x-slot>
    <div class="container">
        <form action="{{ route('servicos.index') }}" method="GET" class="search-form">
            <div class="search-container">
                <input type="text" name="search" placeholder="Pesquisar Servicos..." value="{{ request()->query('search') }}" class="search-input">
                <button type="submit" class="search-button">Pesquisar</button>
            </div>
        </form>
        <a href="{{ route('servicos.create') }}" class="btn btn-primary">Novo Servico</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>nome_servico</th>
                    <th>valor_unitario</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($servicos as $servico)
                    <tr>
                        <td>{{ $servico->id }}</td>
                        <td>{{ $servico->nome_servico }}</td>
                        <td>{{ $servico->valor_unitario }}</td>
                        
                        <td>
                            <a href="{{ route('servicos.show', $servico->id) }}" class="btn btn-info">Detalhes</a>
                            <a href="{{ route('servicos.edit', $servico->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('servicos.destroy', $servico->id) }}" method="POST" style="display: inline;">
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

