@extends('painel.template_painel.template')

@section('content')    
    
    <h1 class="title-pg">
        <a  href="{{route("produtos.index")}}"><span class="glyphicon glyphicon-arrow-left"></span></a>
        Gestão de Produtos: <b>{{$product->name or 'Novo produto'}}</b>
    </h1>

    @if( isset($errors) && count($errors)>0)
        <div class="alert alert-danger">
            @foreach($errors->all() as $erro)
                <p>{{$erro}}</p>
            @endforeach
        </div>
    @endif

    <!--    VERIFICA SE O OBJETO TEM ALGUM DADO PARA SER CARREGADO, NA HORA DE EDITAR   -->
    @if( isset($product))
        {!! Form::model($product, ['route' => ['produtos.update', $product->id ], 'class'=>'form', 'method'=>'put']) !!}
    @else
        {!! Form::open(['route' => 'produtos.store', 'class' => 'form']) !!}    
    @endif
    
        <input type="hidden" name="_token" value="{{csrf_token()}}">

        <div class="form-group"> 
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nome:']) !!}
        </div>
        <div class="form-group"> 
            {!! Form::checkbox('active') !!}
            Ativo?
        </div>
        <div class="form-group"> 
            {!! Form::text('number', null, ['class' => 'form-control', 'placeholder' => 'Número:']) !!}
        </div>

        <div class="form-group">
           {!! Form::select('category', $categorys, null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group"> 
            {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Descrição:']) !!}
        </div>

        {!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}

@endsection