<x-app-layout>
    <head>
        <link rel="stylesheet" href="{{ asset('css/autores/edit.css') }}">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Editar Funcionario</title>
    </head>
    <body>
        <div class="container">
            <h1>Editar Funcionario</h1>
            <form action="{{ route('funcionarios.update', $funcionario->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" value="{{ $funcionario->nome }}">
                </div>
                <div class="form-group">
                    <label for="cpf">CPF:</label>
                    <input type="number" name="cpf" value="{{ $funcionario->cpf }}">
                </div>
                <div class="form-group">
                    <label for="telefone">Telefone:</label>
                    <input type="number" name="telefone" value="{{ $funcionario->telefone }}">
                </div>
                <div class="form-group">
                    <label for="sexo">Sexo:</label>
                    <input type="text" name="sexo" value="{{ $funcionario->sexo }}">
                </div>
                <div class="form-group">
                <label for="endereco_id">Endereco</label>
                <select class="form-control" name="endereco_id" required>
                    <option value="">Selecione um endereco </option>
                    @foreach($enderecos as $endereco)
                        <option value="{{ $endereco->id }}" {{ $endereco->id == $funcionario->endereco_id ? 'selected' : ''}}>{{ $endereco->cidade}}</option>
                    @endforeach
                </select>
                </div>
                <div class="form-group">
                <label for="pedido_id">Pedido</label>
                <select class="form-control" name="pedido_id" required>
                    <option value="">Selecione um Pedido</option>
                    @foreach($pedidos as $pedido)
                        <option value="{{ $pedido->id }}" {{ $pedido->id == $funcionario->pedido_id ? 'selected' : ''}}>{{ $pedido->id}}</option>
                    @endforeach
                </select>
                </div>
                <button type="submit" class="btn btn-success">Salvar Alterações</button>
                <a href="{{ route('funcionarios.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </body>
</x-app-layout>
