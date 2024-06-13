<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Pedidos') }}
        </h2>
    </x-slot>
    <link rel="stylesheet" href="{{ asset('css/show.css') }}">
    <section class="author-details">
      <div class="author-content">
        <div class="author-meta">
          <span class="author-label">ID:</span>
          <span class="author-info">{{ $pedido->id }}</span>
        </div>
        <div class="author-meta">
          <span class="author-label">Nome:</span>
          <span class="author-info">{{ $pedido->valor_total }}</span>
        </div>
        <div class="author-meta">
          <span class="author-label">CPF:</span>
          <span class="author-info">{{ $pedido->previsao_entrega }}</span>
        </div>
        <div class="author-meta">
          <span class="author-label">Telefone:</span>
          <span class="author-info">{{ $pedido->preco_venda }}</span>
        </div>
        <div class="author-meta">
          <span class="author-label">Sexo:</span>
          <span class="author-info">{{ $pedido->observacao }}</span>
        </div>
      </div>
      <a href="{{ route('pedidos.index') }}" class="btn-return">Voltar</a>
    </section>
  </x-app-layout>