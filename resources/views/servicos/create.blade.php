<x-app-layout>
    <head>
        <title>Novo Servico</title>
    </head>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Cadastrar Servico') }}
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
            <h1>Novo Servico</h1>
            <form action="{{ route('servicos.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nome_servico">Nome_servico:</label>
                    <input type="text" name="nome_servico" required>
                </div>
                <div class="form-group">
                    <label for="valor_unitario">valor_unitario:</label>
                    <input type="number" name="valor_unitario" required>
                </div>
                <button type="submit" class="btn btn-success">Salvar</button>
                <a href="{{ route('servicos.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>    
        </div>
    </body>
</x-app-layout>