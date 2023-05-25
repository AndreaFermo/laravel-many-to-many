@extends('layouts.admin')
@section('content')
    <h1 class="text-center mt-3 mb-5">Titolo: {{$project->title}}</h1>
    <h3 class="text-center mt-3 mb-5">Tipologia: {{$project->type?$project->type->name:'Nessuna tipologia assegnata'}}</h3>
    <p class="ms-3 me-3"><span class="fw-bold">Descrizione:</span> {{$project->description}}</p>
    <a href="{{route('admin.projects.index')}}" class="btn btn-primary">Torna alla lista progetti</a>
@endsection