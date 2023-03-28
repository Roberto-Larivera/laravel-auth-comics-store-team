@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <div class="col">
            <h1>
                Tutti i Fumetti
            </h1>
            <a href="{{ route('admin.comics.create') }}" class="btn btn-success">
                Aggiungi Post
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Prezzo</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($comics as $comic)
                    <tr>
                        <th scope="row">{{ $comic->id }}</th>
                        <td>{{ $comic->name }}</td>
                        <td>{{ $comic->price }}</td>
                        <td>
                            <a href="{{ route('admin.comics.show', $comic->id) }}" class="btn btn-info">
                                Dettagli
                            </a>
                            <a href="{{ route('admin.comics.edit', $comic->id) }} " class="btn btn-warning">
                                Modifica
                            </a>
                            <form action="{{ route('admin.comics.destroy', $comic->id) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Sei sicuro di voler eliminare questo post')" >
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">
                                    Elimina
                                </button>
                            </form>
                        </td>
                      </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection