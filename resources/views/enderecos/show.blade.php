<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Enderecos') }}
        </h2>
    </x-slot>
    <link rel="stylesheet" href="{{ asset('css/show.css') }}">

    <section class="author-details">
      <div class="author-content">
        <div class="author-meta">
          <span class="author-label">ID:</span>
          <span class="author-info">{{ $endereco->id }}</span>
        </div>
        <div class="author-meta">
          <span class="author-label">Cidade:</span>
          <span class="author-info">{{ $endereco->cidade }}</span>
        </div>
        <div class="author-meta">
          <span class="author-label">Rua:</span>
          <span class="author-info">{{ $endereco->rua }}</span>
        </div>
        <div class="author-meta">
          <span class="author-label">Bairro:</span>
          <span class="author-info">{{ $endereco->bairro }}</span>
        </div>
        <div class="author-meta">
          <span class="author-label">Estado:</span>
          <span class="author-info">{{ $endereco->estado }}</span>
        </div>
        <div class="author-meta">
          <span class="author-label">Cep:</span>
          <span class="author-info">{{ $endereco->cep }}</span>
        </div>
      </div>
      <a href="{{ route('enderecos.index') }}" class="btn-return">Voltar</a>
    </section>
  </x-app-layout>