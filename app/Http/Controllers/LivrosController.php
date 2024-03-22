<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class LivrosController extends Controller
{
    public function obterLivros(){
        $client = new Client();
        $response = $client->request('GET', 'https://www.googleapis.com/books/v1/volumes', [
            'query' => [
                'q' => 'intitle:O Hipnotista inauthor:Lars Kepler',
            ]
        ]);
        $livros = json_decode($response->getBody()->getContents(), true);

        return view('livros', compact('livros'));
    }

    public function mostrarFormularioPesquisa(){
    return view('pesquisarLivros');
    }

public function buscarLivros(Request $request){
    $pesquisa = $request->input('pesquisa');

    $client = new Client();
    $response = $client->request('GET', 'https://www.googleapis.com/books/v1/volumes', [
        'query' => [
            'q' => $pesquisa,
        ]
    ]);

    $livros = json_decode($response->getBody()->getContents(), true);
    return view('pesquisarLivros', compact('livros'));
}






}
