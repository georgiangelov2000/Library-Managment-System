<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GendreAuthor extends Model
{
    public $timestamps = true;
    protected $table = 'gendre_authors';
    protected $fillable = ['name','created_at','updated_at'];
    use HasFactory;
}
