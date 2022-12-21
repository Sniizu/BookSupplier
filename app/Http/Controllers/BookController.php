<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function index(){
        $books = DB::table('books')->get();
        return view('home')->with('books',$books);
    }
    public function show($id){
        $books = DB::table('books')->where('id','=',$id)->first();
        return view('bookdetail')->with('books',$books);
    }
}
