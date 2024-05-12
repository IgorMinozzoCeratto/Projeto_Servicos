<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Lista Endereco') }}
        </h2>
    </x-slot>
    <div class="container">
        <form action="{{ route('enderecos.index') }}" method="GET" class="search-form">
            <div class="search-container">
                <input type="text" name="search" placeholder="Pesquisar Enderecos..." value="{{ request()->query('search') }}" class="search-input">
                <button type="submit" class="search-button">Pesquisar</button>
            </div>
        </form>
        <a href="{{ route('enderecos.create') }}" class="btn btn-primary">Novo Endereco</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Cidade</th>
                    <th>Rua</th>
                    <th>Bairro</th>
                    <th>Estado</th>
                    <th>Cep</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($enderecos as $endereco)
                    <tr>
                        <td class="colunas">{{ $endereco->id }}</td>
                        <td id="nome">{{ $endereco->cidade }}</td>
                        <td>{{ $endereco->rua }}</td>
                        <td>{{ $endereco->bairro }}</td>
                        <td>{{ $endereco->estado }}</td>
                        <td>{{ $endereco->cep }}</td>
                        <td>
                            <a href="{{ route('enderecos.show', $endereco->id) }}" class="btn btn-info">Detalhes</a>
                            <a href="{{ route('enderecos.edit', $endereco->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('enderecos.destroy', $endereco->id) }}" method="POST" style="display: inline;">
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

