<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class categoriasController extends Controller
{
    function listarCategorias(){
        $client = new Client(['base_uri' => 'http://hostwind.lucianoconde.net']);
        $response = $client->request('GET', '/disciplinaws202301/demomaster/api/categorias');
        $saida = json_decode($response->getBody());//resultado do json decodificado

        return view('listarCategorias', ["categorias" => $saida]);//dano o json para a view
    }
   
}
