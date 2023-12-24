<?php

use Illuminate\Database\Seeder;
use App\SiteContato;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // SiteContato::create([
        //     'nome' => 'Sistema Super Gestao',
        //     'telefone' => '11 9999-9888',
        //     'email' => 'contato@sg.com.br',
        //     'motivo_contato' => 1,
        //     'mensagem' => 'Seja bem vindo ao Sistema SG',
        // ]);
        
        factory(SiteContato::class, 40)->create();
    }
}
