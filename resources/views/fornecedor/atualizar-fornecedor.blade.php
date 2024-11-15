@extends('adminlte::page')

@section('title', 'Dados do Cliente')

@section('content_header')
<h1>Dados do Fornecedor</h1>
<div class="text-right">
<form action="{{ route('fornecedor.deletar', $fornecedor->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <x-adminlte-button type="submit" label="Excluir" theme="danger" icon="fas fa-trash" />
</form>
</div>
@stop

@section('content')
<form method="POST" action="{{ route('fornecedor.atualizar.post', $fornecedor->id) }}">
    @csrf
    <div class="row">
        <x-adminlte-input name="nome_fornecedor" label="Nome Fornecedor" placeholder="Nome Fornecedor" fgroup-class="col-md-6"
            disable-feedback value="{{ $fornecedor->nome_fornecedor }}" />
        <x-adminlte-input name="cnpjcpf" label="CNPJ/CPF" placeholder="CNPJ/CPF" fgroup-class="col-md-3" disable-feedback
            value="{{ $fornecedor->cnpjcpf }}" />
    </div>
    <div class="row">
        <x-adminlte-input name="email" label="E-mail" placeholder="E-mail" fgroup-class="col-md-7"
            value="{{ $fornecedor->email }}" enable-old-support />
        <x-adminlte-input name="telefone" label="Telefone" placeholder="Telefone" value="{{ $fornecedor->telefone }}"
            fgroup-class="col-md-5" enable-old-support />
    </div>
    <div class="row">
        <x-adminlte-input name="cep" label="CEP" placeholder="CEP" value="{{ $fornecedor->cep }}" fgroup-class="col-md-3"
            enable-old-support />
        <x-adminlte-input name="endereco" label="Endereço" placeholder="Endereço" fgroup-class="col-md-7"
            value="{{ $fornecedor->endereco }}" enable-old-support />
        <x-adminlte-input name="numero" label="Número" placeholder="Número" fgroup-class="col-md-2"
            value="{{ $fornecedor->numero }}" enable-old-support />
        <x-adminlte-input name="complemento" label="Complemento" placeholder="Complemento" fgroup-class="col-md-3"
            value="{{ $fornecedor->complemento }}" enable-old-support />
        <x-adminlte-input name="bairro" label="Bairro" placeholder="Bairro" fgroup-class="col-md-3"
            value="{{ $fornecedor->bairro }}" enable-old-support />
        <x-adminlte-input name="cidade" label="Cidade" placeholder="Cidade" fgroup-class="col-md-3"
            value="{{ $fornecedor->cidade }}" enable-old-support />
        <x-adminlte-input name="estado" label="Estado" placeholder="Estado" fgroup-class="col-md-3"
            value="{{ $fornecedor->estado }}" enable-old-support />
    </div>
    <br>
    <br>
    <div class="text-right">
        <x-adminlte-button type="submit" label="Salvar" theme="success" icon="fas fa-lg fa-save" />
        <x-adminlte-button action="{{route('fornecedor.index')}}" type="submit" label="Voltar" theme="secondary"
            icon="fas fa-undo-alt" />
                </div>
</form>
@stop
