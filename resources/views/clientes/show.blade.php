<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Clientes') }}
        </h2>
    </x-slot>

    <link rel="stylesheet" href="{{ asset('css/show.css') }}">

    
    <section class="author-details">
      <div class="author-content">
        <div class="author-meta">
          <span class="author-label">ID:</span>
          <span class="author-info">{{ $cliente->id }}</span>
        </div>
        <div class="author-meta">
          <span class="author-label">Nome:</span>
          <span class="author-info">{{ $cliente->nome }}</span>
        </div>
        <div class="author-meta">
          <span class="author-label">CPF:</span>
          <span class="author-info">{{ $cliente->cpf }}</span>
        </div>
        <div class="author-meta">
          <span class="author-label">Telefone:</span>
          <span class="author-info">{{ $cliente->telefone }}</span>
        </div>
        <div class="author-meta">
          <span class="author-label">Sexo:</span>
          <span class="author-info">{{ $cliente->sexo }}</span>
        </div>
      </div>
      <a href="{{ route('clientes.index') }}" class="btn-return">Voltar</a>
    </section>
  </x-app-layout>