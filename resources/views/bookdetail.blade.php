<title>BookDetail</title>
@extends('navbar')
@section('content')
    <div class="container p-1" style="width: 60%">
        <div class="bg-secondary text-white p-1" style="font-size: 30px">
            Book Detail
        </div>
        <br>
        <div class="card">
            <img src="{{$books->image}}" style="width: 100%">
            <div class="container mt-2" style="font-size: 20px">
                Title : {{$books->title}} <br>
                Author : {{$books->author}} <br>
                Year : {{$books->year}} <br>
                Synopsis : <br>
                {{$books->synopsis}} <br>
            </div>
        </div>
    </div>
@endsection
