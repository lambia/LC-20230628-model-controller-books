@extends('layouts.app')

@section('content')
<div class="container my-3">
    <h1>Welcome Page</h1>
    <div class="row g-4">
        <div class="col">
            <div>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe, delectus ad esse illum omnis earum eligendi sint a minus quasi, inventore nulla autem. Maxime voluptatem eligendi veniam voluptates. Soluta, sunt!</p>
            </div>
        </div>
    </div>
    <div class="row g-4">
        <div class="col">
            @foreach ($books as $book)
                <div class="bookCard">
                    <h2>{{$book->name}}</h2>
                    <h3>Autore: {{$book->author}}</h3>
                    <p>Casa editrice: {{$book->publisher}}</p>
                </div>
            @endforeach
        </div>
    </div>

</div>
@endsection