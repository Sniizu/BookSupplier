<title>Publisher</title>
@extends('navbar')
@section('content')
    <div class="container p-1" style="width: 90%">
        <div class="bg-secondary text-white p-1" style="font-size: 30px">
            Publisher
        </div>
        <br>
        <div class="d-flex flex-wrap">
            @foreach ($publishers as $book)
            <div class="card" style="width: 18rem;">
                <img src="{{$book->image}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$book->name}}</h5>
                  <p class="card-text">
                    {{$book->address}}</p>
                  <a href="/publisher/{{$book->id}}" class="btn btn-primary">Detail</a>
                </div>
              </div>
              @endforeach
        </div>
    </div>
@endsection
