@extends('layout.app')
@section

<main>
    <div class="container">
        <div class="row">
            <div class="col">
                    <h5>{{$comics->name}}</h5>
                    <p>{{$comics->description}}</p>
                    <img src="{{$comics->img}}">
                    <p>{{$comics->price}}</p>
                    <p>{{$comics->quantity}}</p>                
            </div>
        </div>
    </div>
</main>

@endsection