<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller{
    	
   	public function __construct(){
            //$this->middleware('auth');
            
            /* only
             * Com o only ele permite ou seleciona apenas os metodos passados dentro do array para serem autenticados
             * Se o metodo não estiver dentro dele não precisara de auteticação para acessa-lo
             */
            //$this->middleware('auth')->only(['contato','categoria']);
            
            /* except
             * No except todos, nesse caso, os metodos precisam de autenticacao, menos os que são passados dentro do except
             * Ele e o contrario do only, que nos metodos mencionados precisam ser autenticados e no except os metos passados não precisam.
             */
            //$this->middleware('auth')->except('index','contato');
                
   	}

	public function index(){
            $teste = 123;
            $teste2 = 245;
            $teste3 = 542;
            return view('site.teste', compact('teste','teste2','teste3'));
	}
	
	public function contato(){
            return view('site.testecontato');
	}
	
	public function categoria($id){
            return "Listagem da categoria: {$id}";
	}
	
	public function categoriaOp($id = 'default'){
            return "Listagem dos posts da categoria: {$id}";
	}

}