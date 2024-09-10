<?php

namespace App\Http\Controllers;

use App\Models\SectionOne;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // SectionOne
        $sectionOne = SectionOne::first();
        // Busca todos os produtos
        // $produtos = Produto::all();

        // Busca todas as categorias
        // $categorias = Categoria::all();

        // Busca todos os clientes
        // $clientes = Cliente::all();

        // Passa todos os dados para a view home
        return view(
            'home',
            // compact(
                // 'sectionOne',
                // 'produtos',
                // 'categorias',
                // 'clientes'
            // )
        );
    }
}
