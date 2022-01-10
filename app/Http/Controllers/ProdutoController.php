<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return Produto::where(['admin_id' => $request->user()->id])->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $request->validate([
            'nome' => 'required',
            'descricao' => 'required',
            'preco' => 'required',
            'img' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $produto = new Produto;
        $produto->nome = $request->nome;
        $produto->descricao = $request->descricao;
        $produto->preco = $request->preco;
        $produto->antigo_preco = $request->antigo_preco;
        $produto->desconto = $request->desconto;
        $produto->slug = Str::slug($request->nome, '-');
        $produto->admin_id = $request->user()->id;

        if ($request->file('img')){
            $produto->img = date('YmdHis') . "." . $request->file('img')->getClientOriginalExtension();;
            $request->file('img')->move('assets/img/produto', $produto->img);
        }

        $produto->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function show(Produto $produto)
    {
        return $produto;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produto $produto)
    {
        
        $request->validate([
            'nome' => 'required',
            'descricao' => 'required',
            'preco' => 'required'
        ]);
        
        $produto_novo = new Produto;
        $produto_novo->nome = $request->nome;
        $produto_novo->descricao = $request->descricao;
        $produto_novo->preco = $request->preco;
        $produto_novo->antigo_preco = $request->antigo_preco;
        $produto_novo->desconto = $request->desconto;
        $produto_novo->slug = Str::slug($request->nome, '-');
        $produto_novo->admin_id = $request->user()->id;
        

        if ($request->file('img')){
            $produto_novo->img = date('YmdHis') . "." . $request->file('img')->getClientOriginalExtension();;
            $request->file('img')->move('assets/img/produto', $produto_novo->img);
            dd('test1');
        } else {
            $produto_novo->img = $produto->img;
        }
        

        $produto_novo->save();
        
        $produto->delete();
        
        return ["produto" => $produto_novo];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produto $produto)
    {
        $produto->delete();
        return $produto;
    }
}
