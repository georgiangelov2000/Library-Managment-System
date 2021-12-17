<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function authors(){
        return $this->belongsTo(Author::class,'author_id','id');
    }

    public function genres(){
        return $this->belongsTo(GendreBook::class,'genre_id','id');
    }
    public $timestamps = true;
    protected $table = 'books';
    use HasFactory;
}
