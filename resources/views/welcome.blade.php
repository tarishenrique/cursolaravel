@extends('layouts.main')

@section('title', 'Início')
@section('content')
    


    <h1>Algum título</h1>
    @if (10 > 5)
    <p>A condição é true</p>
    @endif

    <p>{{$nome}}</p>

    @if ($nome == "Pedro")
        <p>O nome é Pedro</p>
    @elseif ($nome == "Matheus")
        <p>O nome é {{$nome}} e ele tem {{$idade2}} anos, e trabalha como {{$profissao}} </p>     
    @else
        <p>O nome não é Pedro e nem Matheus </p>
        @endif

    @for ($i = 0; $i < count($arr); $i++)
        <p> {{$arr[$i]}} - {{$i}} </p>
        @if($i == 2)
        <p> O i é 2</p>
        @endif
    @endfor

<br>

    @foreach($nomes as $nome)
        <p> {{ $loop->index }} </p>
        <p>{{$nome}}</p>
    @endforeach

    @php
        $name = "Joilson";
        echo $name;
        
    @endphp


    <!-- Comentário em HTML -->
    {{-- Comentário no Blade --}}

@endsection

