<title>PublisherDetail</title>
@extends('navbar')
@section('content')
    <div class="container p-1" style="width: 60%">
        <div class="bg-secondary text-white p-1" style="font-size: 30px">
            Publisher Detail
        </div>
        <br>
        <div class="card">
            <img src="{{$publisher->image}}" style="width: 100%">
            <div class="container mt-2" style="font-size: 20px">
                Name : {{$publisher->name}} <br>
                Address : {{$publisher->address}} <br>
                Phone : {{$publisher->phone}} <br>
                Email : {{$publisher->email}} <br>
            </div>
        </div>
    </div>
    <div class="container p-1" style="width: 90%">
        <div class="d-flex flex-wrap pt-4">
            @foreach ($publisher->books as $book)
            <div class="card" style="width: 18rem;">
                <img src="{{$book->image}}" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">{{$book->title}}</h5>
                <p class="card-text">
                    by <br>
                    {{$book->author}}</p>
                <a href="{{ route('bookdetail', ['id'=>$book->id]) }}" class="btn btn-primary">Detail</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
