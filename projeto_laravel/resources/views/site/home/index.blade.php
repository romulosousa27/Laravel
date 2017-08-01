@extends('site.templates.template1')

@section('content')
    <h1>Home Page do Site!</h1>
    
    
    <!-- IF -->
    @if( $var == '123')
        <p>é igual!</p>
    @else
        <p>É diferente!</p>
    @endif
    
    
    <!-- UNLESS -->
    @unless($var === 1234)
        <p>Não é igual... unless</p>
    @endunless
    
    
    <!-- FOR -->
    @for($i = 0;$i < 10; $i++)
        <pre>For: {{$i}}</pre>
    @endfor
    
    {{--
     FOREACH 
    @foreach($dadosDOIS as $valor)
        <pre>Foreach: {{$valor}}</pre>
    @endforeach
    --}}



@endsection