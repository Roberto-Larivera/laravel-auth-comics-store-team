@extends('layouts.admin')

@section('content')

<main>
    <div class="container">
        <div class="row">
            <div class="col">
                    <h5>{{$comic->name}}</h5>
                    <p>{{$comic->description}}</p>
                    <img src="{{$comic->img}}">
                    <p>{{$comic->price}}</p>
                    <p>{{$comic->quantity}}</p>                
            </div>
        </div>
    </div>
</main>

@endsection