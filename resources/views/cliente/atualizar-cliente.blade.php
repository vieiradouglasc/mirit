@extends('adminlte::page')

@section('title', 'Dados do Cliente')

@section('content_header')
<h1>Dados do Cliente</h1>
<div class="text-right">
<form action="{{ route('cliente.deletar', $cliente->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <x-adminlte-button type="submit" label="Excluir" theme="danger" icon="fas fa-trash" />
</form>
</div>
@stop

@section('content')
<form method="POST" action="{{ route('cliente.atualizar.post', $cliente->id) }}">
    @csrf
    <div class="row">
        <x-adminlte-input name="nome_completo" label="Nome Completo" placeholder="Nome Completo" fgroup-class="col-md-6"
            disable-feedback value="{{ $cliente->nome_completo }}" />
        <x-adminlte-input name="cpf" label="CPF" placeholder="CPF" fgroup-class="col-md-3" disable-feedback
            value="{{ $cliente->cpf }}" />
        <x-adminlte-input name="data_aniversario" label="Data de Nascimento" placeholder="Data de Nascimento"
            fgroup-class="col-md-3" value="{{ $cliente->data_aniversario }}" enable-old-support />
    </div>
    <div class="row">
        <x-adminlte-input name="email" label="E-mail" placeholder="E-mail" fgroup-class="col-md-7"
            value="{{ $cliente->email }}" enable-old-support />
        <x-adminlte-input name="telefone" label="Telefone" placeholder="Telefone" value="{{ $cliente->telefone }}"
            fgroup-class="col-md-5" enable-old-support />
    </div>
    <div class="row">
        <x-adminlte-input name="cep" label="CEP" placeholder="CEP" value="{{ $cliente->cep }}" fgroup-class="col-md-3"
            enable-old-support />
        <x-adminlte-input name="endereco" label="Endereço" placeholder="Endereço" fgroup-class="col-md-7"
            value="{{ $cliente->endereco }}" enable-old-support />
        <x-adminlte-input name="numero" label="Número" placeholder="Número" fgroup-class="col-md-2"
            value="{{ $cliente->numero }}" enable-old-support />
        <x-adminlte-input name="complemento" label="Complemento" placeholder="Complemento" fgroup-class="col-md-3"
            value="{{ $cliente->complemento }}" enable-old-support />
        <x-adminlte-input name="bairro" label="Bairro" placeholder="Bairro" fgroup-class="col-md-3"
            value="{{ $cliente->bairro }}" enable-old-support />
        <x-adminlte-input name="cidade" label="Cidade" placeholder="Cidade" fgroup-class="col-md-3"
            value="{{ $cliente->cidade }}" enable-old-support />
        <x-adminlte-input name="estado" label="Estado" placeholder="Estado" fgroup-class="col-md-3"
            value="{{ $cliente->estado }}" enable-old-support />
    </div>
    <br>
    <br>
    <div class="text-right">
        <x-adminlte-button type="submit" label="Salvar" theme="success" icon="fas fa-lg fa-save" />
        <x-adminlte-button type="submit" label="Orçamento" theme="warning" icon="fas fa-file-invoice" />
        <x-adminlte-button type="submit" label="Pedido" theme="info" icon="fas fa-file-invoice-dollar" />
        <x-adminlte-button action="{{route('cliente.index')}}" type="submit" label="Voltar" theme="secondary"
            icon="fas fa-undo-alt" />
                </div>
</form>
@stop