<title>Category</title>
@extends('navbar')
@section('content')
    <div class="container p-1" style="width: 90%">
        <div class="bg-secondary text-white p-1" style="font-size: 30px">
            Category
        </div>
        <br>
        <div class="d-flex flex-wrap">
            @foreach ($category->books as $book)
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
