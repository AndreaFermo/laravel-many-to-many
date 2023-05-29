@extends('layouts.admin')

@section('content')
    <form method="POST" action="{{ route('admin.projects.store') }}" enctype="multipart/form-data">

        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Titolo:</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror " id="title" name="title" value="{{old('title')}}">
            @error('title')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="mb-3">

            <label for="image" class="form-label">Seleziona immagine di copertina</label>

            <input type="file" class="form-control @error('image') is-invalid @enderror " id="image" name="image">
            @error('image')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>


        <div class="mb-3">
            <label for="description" class="form-label">Descrizione del progetto:</label>
            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{old('description')}}</textarea>
            @error('description')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="type_id" class="form-label">Seleziona tipologia</label>
            <select class="form-select @error('type_id') is-invalid @enderror" name="type_id" id="type_id">
                <option @selected(old('type_id')=='') value="">Nessuna tipologia</option>
                @foreach ($types as $type)
                    <option @selected(old('type_id')==$type->id) value="{{$type->id}}">{{$type->name}}</option>
                @endforeach
            </select>
            @error('type_id')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <h4>Tecnologie usate per il progetto</h4>
            @foreach($technologies as $technology)
                <input id="technology_{{$technology->id}}" @if (in_array($technology->id , old('technologies', []))) checked @endif type="checkbox" name="technologies[]" value="{{$technology->id}}">
                <label for="technology_{{$technology->id}}"  class="form-label">{{$technology->name}}</label>
                <br>
            @endforeach
            @error('technologies')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Salva</button>

    </form>
@endsection