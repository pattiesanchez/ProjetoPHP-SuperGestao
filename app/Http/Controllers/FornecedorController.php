<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        $fornecedores = [
            0 => ['nome' => 'Fornecedor 1', 
            'status' => 'N', 
            'ddd' => '11',
            'cnpj' => '000662',
            'telefone' => '2256-2225'
            ],
            1 => ['nome' => 'Fornecedor 2', 
            'status' => 'N', 
            'ddd' => '85',
            'cnpj' => null,
            'telefone' => '2256-2225'
            ],
            2 => ['nome' => 'Fornecedor 3', 
            'status' => 'N', 
            'ddd' => '32',
            'cnpj' => null,
            'telefone' => '2256-2225'
            ],
        ];
        #
        /* condicao ? se verdade : se falso;
           condicao ? se verdade (condicao ? se verdade );
        */
        return view('app.fornecedor.index', compact('fornecedores'));
    }
}