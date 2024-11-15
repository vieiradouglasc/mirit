@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>
    <x-adminlte-button icon="fas fa-plus" data-toggle="modal" data-target="#modalCriarFornecedor" class="bg-success" />
    Fornecedores
</h1>
@stop

@php
    $heads = [
        'Nome Fornecedor',
        'CPF/CNPJ',
        'E-mail',
        'Telefone',
        'Ações',
    ];
@endphp

@section('content')
<x-adminlte-modal id="modalCriarFornecedor" title="Criar Fornecedor" theme="success" icon="fas fa-plus" size='lg'
    disable-animations v-centered static-backdrop scrollable>
    <form method="post" action="{{ route('fornecedor.criar.post') }}">
        @csrf
        <div class="row">
            <x-adminlte-input name="nome_fornecedor" label="Nome Fornecedor" placeholder="Nome Fornecedor"
                fgroup-class="col-md-7" enable-old-support />
            <x-adminlte-input name="cnpjcpf" label="CNPJ/CPF" placeholder="CNPJ/CPF" fgroup-class="col-md-5" enable-old-support />
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
    @foreach ($fornecedores as $fornecedor)
        <tr>
            <td>{{ $fornecedor->nome_fornecedor }}</td>
            <td>{{ $fornecedor->cnpjcpf }}</td>
            <td>{{ $fornecedor->email }}</td>
            <td>{{ $fornecedor->telefone }}</td>
            <td>
                <div class="row">
                    <a href="{{ route('fornecedor.atualizar.get', $fornecedor->id) }}"
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
