@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>
    <x-adminlte-button icon="fas fa-plus" data-toggle="modal" data-target="#modalCriarCliente" class="bg-success" />
    Clientes
</h1>
@stop

@php
    $heads = [
        'Nome Completo',
        'Data de Nascimento',
        'E-mail',
        'Telefone',
        'Ações',
    ];
@endphp

@section('content')
<x-adminlte-modal id="modalCriarCliente" title="Criar Categoria" theme="success" icon="fas fa-plus" size='lg'
    disable-animations v-centered static-backdrop scrollable>
    <form method="post" action="{{ route('cliente.criar.post') }}">
        @csrf
        <div class="row">
            <x-adminlte-input name="nome_completo" label="Nome Completo" placeholder="Nome Completo"
                fgroup-class="col-md-6" enable-old-support />
            <x-adminlte-input name="cpf" label="CPF" placeholder="CPF" fgroup-class="col-md-3" enable-old-support />
            <x-adminlte-input name="data_aniversario" label="Data de Nascimento" placeholder="Data de Nascimento"
                fgroup-class="col-md-3" enable-old-support />
        </div>
        <div class="row">
            <x-adminlte-input name="email" label="E-mail" placeholder="E-mail" fgroup-class="col-md-7"
                enable-old-support />
            <x-adminlte-input name="telefone" label="Telefone" placeholder="Telefone" fgroup-class="col-md-5"
                enable-old-support />
        </div>
        <div class="row">
            <x-adminlte-input name="cep" label="CEP" placeholder="CEP" fgroup-class="col-md-3" enable-old-support />
            <x-adminlte-input name="endereco" label="Endereço" placeholder="Endereço" fgroup-class="col-md-7"
                enable-old-support />
            <x-adminlte-input name="numero" label="Número" placeholder="Número" fgroup-class="col-md-2"
                enable-old-support />
            <x-adminlte-input name="complemento" label="Complemento" placeholder="Complemento" fgroup-class="col-md-3"
                enable-old-support />
            <x-adminlte-input name="bairro" label="Bairro" placeholder="Bairro" fgroup-class="col-md-3"
                enable-old-support />
            <x-adminlte-input name="cidade" label="Cidade" placeholder="Cidade" fgroup-class="col-md-3"
                enable-old-support />
            <x-adminlte-input name="estado" label="Estado" placeholder="Estado" fgroup-class="col-md-3"
                enable-old-support />
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
    @foreach ($clientes as $cliente)
        <tr>
            <td>{{ $cliente->nome_completo }}</td>
            <td>{{ $cliente->data_aniversario }}</td>
            <td>{{ $cliente->email }}</td>
            <td>{{ $cliente->telefone }}</td>
            <td>
                <div class="row">
                    <a href="{{ route('cliente.atualizar.get', $cliente->id) }}"
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