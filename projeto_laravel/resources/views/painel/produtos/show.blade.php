@extends('painel.template_painel.template')

@section('content')
<h1 class="title-pg">
    <a  href="{{route("produtos.index")}}"><span class="glyphicon glyphicon-arrow-left"></span></a>    
    Produto: <b>{{$product->name}}</b>
</h1>


<p><b>Ativo: </b>{{$product->active}}</p>
<p><b>Numero: </b>{{$product->number}}</p>
<p><b>Categoria: </b>{{$product->category}}</p>
<p><b>Descrição: </b>{{$product->description}}</p>
<hr>

@if( isset($errors) && count($errors)>0)
    <div class="alert alert-danger">
        @foreach($errors->all() as $erro)
            <p>{{$erro}}</p>
        @endforeach
    </div>
@endif

{!! Form::open(['route'=>['produtos.destroy', $product->id], 'method'=>'DELETE']) !!}
    {!! Form::submit("Deletar Produto: $product->name", ['class' => 'btn btn-danger']) !!}

{!! FOrm::close() !!}
@endsection