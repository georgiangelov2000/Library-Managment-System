<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public $timestamps = true;
    protected $table = 'roles';
    protected $fillable = ['name','created_at','updated_at'];
    
    //  public function user(){
    //      return $this->hasOne(User::class,'role_id','id');
    //  }

      public function users(){
          return $this->hasMany(User::class,'role_id','id');
      }
    
    use HasFactory;
}
