<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Painel\Product;

class ProdutoController extends Controller{
    
    private $product;
    
    public function __construct(Product $product) {
        $this->product = $product;
    }
    
    public function index(){
        $products = $this->product->all();
        return view('painel.products.index', compact('products'));
    }
    
    public function create(){
        
    }

    public function store(Request $request){
        
    }
    
    public function show($id){
        
    }
    
    public function edit($id){
        
    }

    public function update(Request $request, $id){
        
    }

    public function destroy($id){
        
    }
    public function tests(){
    
    /*
        $prod = $this->product;
        $prod->name = 'Nome do produto';
        $prod->number = 763;
        $prod->active = true;
        $prod->category = 'eletronica';
        $prod->description = 'Descrição do produto';
        $insert = $prod->save();
        
        if($insert){
            return 'Produto inserido com sucesso';
        }
        else{
            return 'Erro ao inserir!';
        }
    */
        
        $insert = $this->product->create([
            'name' => 'Nome do produto 2',
            'number' => '132421',
            'active' => FALSE,
            'category' => 'eletronica',
            'description' => 'Descrição vem aqui'
        ]);
        
        if($insert){
            return 'Produto inserido com sucesso';
            //retornando com parametro
            //return "Produto inserido com sucesso, Id: {$insert->id}";
        }
        else{
            return 'Erro ao inserir!';
        }
        
    }
}
