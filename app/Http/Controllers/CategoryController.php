<?php

namespace App\Http\Controllers;

use App\Models\categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function show($id){
        $category = categories::find($id);
        return view('category')->with('category',$category);
    }
}
