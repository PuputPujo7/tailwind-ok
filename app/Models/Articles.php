<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $table ='articles';
    protected $fillable = ['title', 'content','createdby', 'picture', 'source'];
   
}
