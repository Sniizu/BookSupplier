<?php

namespace App\Http\Controllers;

use App\Models\publisher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PublisherController extends Controller
{
    public function index(){
        $publishers = DB::table('publishers')->get();
        return view('publisher')->with('publishers',$publishers);
    }
    public function show($id){
        $publisher = publisher::find($id);
        return view('publisherdetail')->with('publisher',$publisher);
    }
}
