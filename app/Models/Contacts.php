<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $table ='guests';
    protected $fillable = ['group', 'name','nik', 'email', 'phone', 'address','meet', 'agenda', 'spt'];
}
