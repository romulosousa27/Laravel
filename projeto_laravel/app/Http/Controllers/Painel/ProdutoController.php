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
        
        $title = 'Listagem dos produtos';
        
        $products = $this->product->all();
        return view('painel.produtos.index', compact('products','title'));
    }
    
    public function create(){
        
        $title = 'Cadastrar Novo Produto';
        $categorys = ['eletronica','moveis','limpeza'];
        return view('painel.produtos.create',  compact('title','categorys'));
    }

    public function store(Request $request){
        //dd($request->all());
        //dd($request->only(['nome','number']));
        //dd($request->except('_token'));
        //dd($resquest->input('nome'));
        
        //pega todos os dados que vem do formulario
        $dataform = $request->except('_token');
        
        //faz o cadastro
        $insert = $this->product->insert($dataform);

        if ($insert) {
            return redirect()->route('produtos.index');
        }
        else{
            return redirect()->route('produtos.create');
            //return redirect()->back();
        }
        
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
      
        //INSERINDO DADOS NO BANCO DE DADOS
        
    /*    $insert = $this->product->create([
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
     */   
        
        //UPDATE DO BANCO DE DADOS
    /*    
        $prod = $this->product->find(5);
        //dd($prod);
        $prod->name = 'Update';
        $prod->number = 12341;
        $prod->active = true;
        $prod->category = 'eletronica';
        $prod->description = 'Desc Update';
        $update = $prod->save();
        
        if($update){
            return 'Alterado com sucesso';
        }
        else{
            return 'Falha ao alterar!';
        }
     *
     */
        
        //OUTRA FORMA DE FAZER UPDATE
    /*    
        $prod = $this->product->find(6);
        $update = $prod->update([
            'name'      => 'Update teste',
            'number'    => '987987',
            'active'    => TRUE,
        ]);
         
        if($update){
            return 'Alterado com sucesso';
        }
        else{
            return 'Falha ao alterar!';
        }
     * 
     */
        
        //UPDATE TERCEIRA FORMA USANDO WHERE
    /*    
        $update = $this->product->where('number', 132421)
                ->update([
                    'name'      => 'Update teste 2',
                    'number'    => '525362',
                    'active'    => FALSE,
                ]);
         
        if($update){
            return 'Alterado com sucesso Update!';
        }
        else{
            return 'Falha ao alterar!';
        }
     * 
     */
        
    }
}
