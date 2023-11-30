@extends('layouts.admin')

@section('content')

    <form action="{{route('admin.projects.update')}}" method="POST">
        @csrf

        <div class="mb-3">
          <label for="name" class="form-label">Nome progetto</label>
          <input type="text" class="form-control" name="name" value="{{$project->title}}">
        </div>

        <div class="form-floating">
            <textarea
            class="form-control"
            placeholder="Descrizione"
            value="{{$project->explanation}}"
            name="explanation"
            >
           </textarea>

            <label for="explanation">Descrizione</label>

          </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>



@endsection
