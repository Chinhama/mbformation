<?php

namespace App\Http\Controllers;

use App\pessoa;
use Illuminate\Http\Request;

class PessoaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    
    {
        $dados = pessoa::all();
        return view('pessoa.layout',["user"=>$dados]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pessoa.adicionar_pessoa');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $pessoa = new pessoa;
       // dd($request);

       $pessoa->nome=$request->nome;
       $pessoa->sobrenome=$request->sobre_nome;
       $pessoa->idade=$request->age;
       $pessoa->altura=$request->alt;
       $pessoa->sexo=$request->sex;
       $pessoa->foto=$request->foto;
       $pessoa->save();
       return redirect()->route('listpessoa');



       

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function show(pessoa $pessoa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function edit(pessoa $pessoa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pessoa $pessoa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function destroy(pessoa $pessoa)
    {
        $pessoa->delete(); 
        return redirect()->route('listpessoa');

    }
}
