@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>
    <x-adminlte-button icon="fas fa-plus" data-toggle="modal" data-target="#modalCriarProduto" class="bg-success" />
    Produtos
</h1>
@stop

@php
    $heads = [
        'Nome do Produto',
        'Categoria',
        'Ações',
    ];
@endphp

@section('content')
<x-adminlte-modal id="modalCriarProduto" title="Criar Produto" theme="success" icon="fas fa-plus" size='lg'
    disable-animations v-centered static-backdrop scrollable>
    <form method="post" action="{{ route('produto.criar.post') }}">
        @csrf
        <div class="row">
            <x-adminlte-input name="nome_produto" label="Nome do Produto" placeholder="Nome do Produto"
                fgroup-class="col-md-8" enable-old-support />
            <x-adminlte-select name="categoria" label="Categoria" id="categoria" class="form-control"
                fgroup-class="col-md-4">
                <option value="Baralho Padrão" {{ old('categoria', $produto->categoria ?? '') == 'Baralho Padrão' ? 'selected' : '' }}>Baralho Padrão</option>
                <option value="Baralho Personalizado" {{ old('categoria', $produto->categoria ?? '') == 'Baralho Personalizado' ? 'selected' : '' }}>
                Baralho Personalizado</option>
                <option value="Esferas de Defumação" {{ old('categoria', $produto->categoria ?? '') == 'Esferas de Defumação' ? 'selected' : '' }}>
                Esferas de Defumação</option>
                <option value="Sal Negro" {{ old('categoria', $produto->categoria ?? '') == 'Sal Negro' ? 'selected' : '' }}>Sal Negro</option>
                <option value="Incensos" {{ old('categoria', $produto->categoria ?? '') == 'Incensos' ? 'selected' : '' }}>Incensos</option>
            </x-adminlte-select>
        </div>
        <x-adminlte-button class="mr-auto" type="submit" theme="success" label="Salvar" />
        <x-adminlte-button theme="danger" label="Fechar" data-dismiss="modal" />
        <x-slot name="footerSlot">
        </x-slot>
    </form>
</x-adminlte-modal>
<br>
<br>
<x-adminlte-datatable id="table1" :heads="$heads">
    @foreach ($produtos as $produto)
        <tr>
            <td>{{ $produto->nome_produto }}</td>
            <td>{{ $produto->categoria }}</td>
            <td>
                <div class="row">
                    <a href="{{ route('produto.atualizar.get', $produto->id) }}"
                        class="btn btn-info btn-md mr-1">Informações</a>
                </div>
            </td>
        </tr>
    @endforeach
</x-adminlte-datatable>

@stop

@section('css')
{{-- Add here extra stylesheets --}}
{{--
<link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')

@stop