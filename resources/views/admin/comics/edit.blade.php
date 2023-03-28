@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center mb-4">
            <div class="col">
                <h1>
                    Modifica Fumetto
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <form action="{{ route('admin.posts.update', $post) }}" method="POST" enctype="multipart/form-data">

                    @csrf
                    @method('PUT')

                    <div>
                        <label for="name" class="form-label">Nome Fumetto*</label>
                        <input type="text" name="name" id="name" class="form-control" required maxlength="128" value="{{ old('name', $comic->name) }}" placeholder="Inserisci Nome del Progetto">
                    </div>
                    <div>
                        <label for="price" class="form-label">Super Prezzo*</label>
                        <input type="number" name="price" id="price" class="form-control" value="{{ old('price', $comic->price) }}" required placeholder="Inserisci il prezzo del fumetto">
                    </div>
                    <div>
                        <label for="quantity" class="form-label">Quantità*</label>
                        <input type="number" name="quantity" id="quantity" class="form-control" value="{{ old('quantity', $comic->quantity) }}" required placeholder="Inserisci la quantità">
                    </div>
                    <div>
                        <label for="description" class="form-label">Descrizione</label>
                        <input type="text" name="description" id="description" class="form-control" value="{{ old('description', $comic->description) }}" placeholder="Inserisci una nuova descrizione">
                    </div>
                    <div>
                        <label for="image" class="form-label">Immagine</label>
                        <input type="file" name="image" id="image" class="form-control" value="{{ old('url', $comic->url) }}">
                    </div>
                    <div class="mb-3">
                        <p>
                            I campi contrasseganti con <strong>*</strong> sono obbligatori.
                        </p>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-success mt-5">
                            Salva
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection