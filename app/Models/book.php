<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    use HasFactory;
    public function publisher(){
        return $this->belongsTo(publisher::class);
    }
    public function categories(){
        return $this->belongsToMany(categories::class, 'book_categories', 'category_id', 'book_id');
    }
}
