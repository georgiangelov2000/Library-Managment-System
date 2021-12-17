<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{

    public function genres(){
        return $this->belongsTo(GendreAuthor::class,'genre_id','id');
    }

    public function genders(){
        return $this->belongsTo(Gender::class,'gender_id','id');
    }

    public $timestamps = true;
    protected $table = 'authors';
    use HasFactory;
}
