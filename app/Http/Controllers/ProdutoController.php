<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index()
    {
        $produtos = Produto::all();
        return view('produto.index', compact('produtos'));
    }
    public function criarProduto(Request $request)
    {
        Produto::create($request->all());
        return redirect()->route('produto.index');
    }

    public function formularioAtualizarProduto(Produto $produto)
    {
        return view('produto.atualizar-produto', compact('produto'));
    }
    public function atualizarProduto(Request $request, Produto $produto)
    {
        $produto->update($request->all());
        return redirect()->route('produto.index', compact('produto'));
    }
    public function deletarProduto($produto)
    {
        $produto = Produto::find($produto);
        $produto->delete();
        return redirect()->route('produto.index');
    }
}
