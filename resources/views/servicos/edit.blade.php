<x-app-layout>
    <head>
        <link rel="stylesheet" href="{{ asset('css/autores/edit.css') }}">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Editar Servico</title>
    </head>
    <body>
        <div class="container">
            <h1>Editar Servico</h1>
            <form action="{{ route('servicos.update', $servico->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nome_servico">Nome_servico:</label>
                    <input type="text" name="nome_servico" value="{{ $servico->nome_servico }}">
                </div>
                <div class="form-group">
                    <label for="valor_unitario">Valor_unitario:</label>
                    <input type="number" name="valor_unitario" value="{{ $servico->valor_unitario }}">
                </div>
                <button type="submit" class="btn btn-success">Salvar Alterações</button>
                <a href="{{ route('servicos.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </body>
</x-app-layout>
