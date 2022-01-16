<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GendreBook extends Model
{
    public $timestamps = true;
    protected $table = 'gendre_books';
    protected $fillable = ['name','created_at','updated_at'];
    
    public function books(){
        return $this->hasMany(Book::class,'genre_id','id');
    }

    // public function assignOwner(){
    //     return $this->hasOneThrough(
    //         AssignBook::class,
    //         Book::class,
    //         'genre_id',
    //         'book_id',
    //         'id',
    //         'id'
    //     );
    // }

    use HasFactory;
}
