<?php

namespace App\Http\Controllers;

use App\SiteContato;
use Illuminate\Http\Request;
use App\MotivoContato;

class ContatoController extends Controller 
{
    public function contato(Request $request){

        $motivo_contatos = MotivoContato::all();

        return view('site.contato', ['titulo' => 'Contato (teste)', 'motivo_contatos' => $motivo_contatos] );

    }

    public function salvar(Request $request){
        $regras = [
            'nome' => 'required|min:3|max:40|unique:site_contatos',
            'telefone' => 'required',
            'email' => 'email',
            'motivo_contatos_id' => 'required',
            'mensagem' => 'required|max:2000',
        ];

        $feedback = [
            'nome.required' => 'O campo nome deverá ser preenchido',
            'nome.min' => 'O nome deverá conter no mínimo 3 caracteres',
            'nome.max' => 'O nome excedeu o número máximo de caracteres',
            'nome.unique' => 'Este nome já existe na base de dados',
            'telefone.required' => 'O campo telefone deverá ser preenchido',
            'email.email' => 'O campo deverá ser um e-mail válido',
            'motivo_contatos_id.required' => 'O campo motivo do contato deverá ser preenchido',
            'mensagem.required' => 'O campo mensagem deverá ser preenchido',
            'mensagem.max' => 'A mensagem deve ter no máximo 2000 caracteres',
        ];
    
        $request->validate($regras, $feedback);
    
        SiteContato::create($request->all());
        return redirect()->route('site.index');
    }
}