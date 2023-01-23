<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Author;
class book extends Model
{
    protected $table='books';
    protected $gaurded=[];


    public function authorId(){

     return $this->belongsTo('App\Author','id');

    }
    
    

}
