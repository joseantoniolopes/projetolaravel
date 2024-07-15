<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class ProdutoController extends BaseController
{
    function __construct() {   
    }

    public function index() {
        $titulo = 'teste produto';

        return view('produto.index', [
            'titulo' => $titulo,
        ]);
    }

}
