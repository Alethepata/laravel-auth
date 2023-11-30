@extends('layouts.admin')

@section('content')
    <h1>Tecnologie</h1>

    <div class="table_container w-50">


        <form action="{{ route('admin.tecnologies.store') }}" method="POST">
            @csrf
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Aggiungi" name="name">
                <button class="btn btn-outline-success" type="submit" id="button-addon2">Aggiungi</button>
            </div>
        </form>

        <table class="table my-3">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Titolo</th>
                <th scope="col">Azioni</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($tecnologies as $tecnology)
                   <tr>
                     <td>{{$tecnology->id}}</td>
                     <td>{{$tecnology->name}}</td>
                     <td><a class="btn btn-success" href="">Edit</a></td>
                   </tr>
                @endforeach

            </tbody>
        </table>

    </div>

@endsection
