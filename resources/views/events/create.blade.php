@extends('layouts.main')

@section('title', 'Início')
@section('content')

<div id="event-create-containe" class="col-md-6 offset-md-3">

    <h1>Crie o seu evento</h1>

    <form action="/events" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Evento: </label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do Evento">
        </div>
        <div class="form-group">
            <label for="title">Cidade: </label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Nome da Cidade">
        </div>
        <div class="form-group">
            <label for="title">O evento é privado? </label>
            <select name="private" id="private" class="form-control">
                <option value="0">Não</option>
                <option value="1">Sim</option>
        </div>
        <div class="form-group">
            <label for="title">Descrição: </label>
            <textarea class="form control" name="description" id="description" placeholder="O que vai acontecer no evento" ></textarea>
        </div>
        <input type="submit" class="btn btn-primary" value="Criar Evento">

    </form>

</div>



@endsection