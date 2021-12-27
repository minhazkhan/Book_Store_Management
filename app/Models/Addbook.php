<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Addbook;

class Addbook extends Model
{
    use HasFactory;
    // protected $filelable=[
    //     'bookname',
    //     'desc',
    //     'author',
    //     'page',
    //     'image',
    // ];

    // public function books(){
    //     return $this->hasMany(Addbook::class);
    // }
}
