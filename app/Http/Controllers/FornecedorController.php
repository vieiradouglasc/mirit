<?php

namespace App\Http\Controllers;

use App\Models\Fornecedor;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = Fornecedor::all();
        return view('fornecedor.index', compact('fornecedores'));
    }
    public function criarFornecedor(Request $request)
    {
        Fornecedor::create($request->all());
        return redirect()->route('fornecedor.index');
    }
    public function formularioAtualizarFornecedor(Fornecedor $fornecedor)
    {
        return view('fornecedor.atualizar-fornecedor', compact('fornecedor'));
    }
    public function atualizarFornecedor(Request $request, Fornecedor $fornecedor)
    {
        $fornecedor->update($request->all());
        return redirect()->route('fornecedor.index', compact('fornecedor'));
    }
    public function deletarFornecedor($fornecedor) {
        $fornecedor = Fornecedor::find($fornecedor);
        $fornecedor->delete();
        return redirect()->route('fornecedor.index');
    }
}
