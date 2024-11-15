@extends('adminlte::page')

@section('title', 'Dados do Cliente')

@section('content_header')
<h1>Dados do Produto</h1>
<div class="text-right">
<form action="{{ route('produto.deletar', $produto->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <x-adminlte-button type="submit" label="Excluir" theme="danger" icon="fas fa-trash" />
</form>
</div>
@stop

@section('content')
<form method="POST" action="{{ route('produto.atualizar.post', $produto->id) }}">
    @csrf
    <div class="row">
        <x-adminlte-input name="nome_produto" label="Nome do Produto" placeholder="Nome do Produto" fgroup-class="col-md-8"
            disable-feedback value="{{ $produto->nome_produto }}" />
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
    <br>
    <br>
    <div class="text-right">
        <x-adminlte-button type="submit" label="Salvar" theme="success" icon="fas fa-lg fa-save" />
        <x-adminlte-button action="{{route('produto.index')}}" type="submit" label="Voltar" theme="secondary"
            icon="fas fa-undo-alt" />
                </div>
</form>
@stop
