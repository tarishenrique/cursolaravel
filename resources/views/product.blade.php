@extends('layouts.main')

@section('title', 'Início')
@section('content')

    @if ($id != null)
        <p>Exibindo produto id: {{$id}} </p>
         
    @endif


@endsection