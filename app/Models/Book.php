<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable=['id','name', "description",'author','borrowed','roof_id','category_id','book_img','book_file'];


    public function student(){
        return $this->belongsTo('App\Models\User','borrowed');
    }
}
