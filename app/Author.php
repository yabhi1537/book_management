<?php

namespace App;
use App\book;
// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
;

class Author extends Model
{
    use SoftDeletes;
    
    protected $gaurded=[];
    // protected $fillable = [
    //     'author_name',
    // ];
}
