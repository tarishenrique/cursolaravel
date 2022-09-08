@extends('layouts.main')

@section('title', 'Início')
@section('content')
    
    <div id="search-container" class="col-md-12">
        <h1>Busque um evento</h1>
        <form action="">
            <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
        </form>
    </div>
    <div id="events-container" class="col-md-12">
        <h2>Próximos Eventos</h2>
        <p class="subtitle">Veja os eventos dos próximos dias</p>
        <div id="cards-container" class="row">
            @foreach($events as $event)
            <div class="card col-md-3">
                <img src="/img/event_placeholder.jpg" alt="{{ $event->title }}">
                <div class="card-body">
                    <p class="card-date">10/09/2020</p>
                    <h5 class="card-title">{{ $event->title }}</h5>
                    <p class="card-participants">X Participantes</p>
                    <a href="#" class="btn btn-primary">Saber mais</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>






{{-- 
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
    Comentário no Blade --}}

@endsection

