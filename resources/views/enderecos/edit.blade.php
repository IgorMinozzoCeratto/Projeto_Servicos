<x-app-layout>
    <head>
    <link rel="stylesheet" href="{{ asset('css/edit.css') }}">

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Editar Enderecos</title>
    </head>
    <body>
        <div class="container">
            <h1>Editar Enderecos</h1>
            <form action="{{ route('enderecos.update', $endereco->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="cidade">Cidade:</label>
                    <input type="text" name="cidade" value="{{ $endereco->cidade }}">
                </div>
                <div class="form-group">
                    <label for="rua">Rua:</label>
                    <input type="text" name="rua" value="{{ $endereco->rua }}">
                </div>
                <div class="form-group">
                    <label for="bairro">Bairro:</label>
                    <input type="text" name="bairro" value="{{ $endereco->bairro }}">
                </div>
                <div class="form-group">
                    <label for="estado">Estado:</label>
                    <input type="text" name="estado" value="{{ $endereco->estado }}">
                </div>
                <div class="form-group">
                    <label for="cep">Cep:</label>
                    <input type="text" name="cep" value="{{ $endereco->cep }}">
                </div>
                <button type="submit" class="btn btn-success">Salvar Alterações</button>
                <a href="{{ route('enderecos.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </body>
</x-app-layout>
