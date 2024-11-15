<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
        return view('cliente.index', compact('clientes'));
    }
    public function criarCliente(Request $request)
    {
        Cliente::create($request->all());
        return redirect()->route('cliente.index');
    }
    public function formularioAtualizarCliente(Cliente $cliente)
    {
        return view('cliente.atualizar-cliente', compact('cliente'));
    }
    public function atualizarCliente(Request $request, Cliente $cliente)
    {
        $cliente->update($request->all());
        return redirect()->route('cliente.index', compact('cliente'));
    }
    public function deletarCliente($cliente) {
        $cliente = Cliente::find($cliente);
        $cliente->delete();
        return redirect()->route('cliente.index');
    }
}
