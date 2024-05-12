<x-app-layout>
    <head>
        <title>Novo Endereco</title>
    </head>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Cadastrar Endereco') }}
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
            <h1>Novo Endereco</h1>
            <form action="{{ route('enderecos.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="cidade">Cidade:</label>
                    <input type="text" name="cidade" required>
                </div>
                <div class="form-group">
                    <label for="rua">Rua:</label>
                    <input type="text" name="rua" required>
                </div>
                <div class="form-group">
                    <label for="bairro">Bairro:</label>
                    <input type="text" name="bairro" required>
                </div>
                <div class="form-group">
                    <label for="estado">Estado:</label>
                    <input type="text" name="estado" required>
                </div>
                <div class="form-group">
                    <label for="cep">Cep:</label>
                    <input type="text" name="cep" required>
                </div>
                <button type="submit" class="btn btn-success">Salvar</button>
                <a href="{{ route('enderecos.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>    
        </div>
    </body>
</x-app-layout>