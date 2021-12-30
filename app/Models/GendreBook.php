<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GendreBook extends Model
{
    public $timestamps = true;
    protected $table = 'gendre_books';
    protected $fillable = ['name','created_at','updated_at'];
    use HasFactory;
}
