@extends('site.templates.template1')

@section('content')
    <h1>Home Page do Site!</h1>
    
    @if( $var == '123')
        <p>é igual!</p>
    @else
        <p>É diferente!</p>
    @endif
    
    
    
    @unless($var === 1234)
        <p>Não é igual... unless</p>
    @endunless
    
    
    
    @for($i = 0;$i < 10; $i++)
        <p>Valor: {{$i}}</p>
    @endfor
    
@endsection