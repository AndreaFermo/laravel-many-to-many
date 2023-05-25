@extends('layouts.admin')

@section('content')

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Titolo</th>
        <th scope="col">Descrizione</th>
        <th scope="col">Azioni</th>
      
      </tr>
    </thead>
    <tbody>
      @foreach ($projects as $project)
          <tr>
            <td>{{$project->id}}</td>
            <td>{{$project->title}}</td>
            <td>{{$project->description}}</td>
            <td class="d-flex">
              <a class="btn btn-primary" href="{{route('admin.projects.show', $project->slug)}}">Mostra</a>
              <a class="btn btn-warning" href="{{route('admin.projects.edit', $project->slug)}}">Modifica</a>
              <form action="{{route('admin.projects.destroy', ['project' => $project->slug])}}"  method="POST" class="form_delete_project">
                @csrf
                @method('DELETE')
                  <button class="btn btn-danger" type="submit">
                    Cancella
                  </button>
              </form>  
            </td> 
          </tr>
      @endforeach
    </tbody>
  </table>

  <div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Conferma eliminazione</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            Vuoi veramente cancellare il progetto?
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Chiudi</button>
            <button type="button" class="btn btn-danger">Si voglio cancellare!</button>
        </div>
        </div>
    </div>
</div>

@endsection

