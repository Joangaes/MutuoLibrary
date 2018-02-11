<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';

    protected $primaryKey = 'book_id';

    protected $fillable = ['book_info_id','author_id','existence','loaned'];

    public function BookInfo(){
      return $this->belongsTo('App\BookInfo','book_info_id','book_info_id');
    }
    public function Author(){
      return $this->belongsTo('App\Author','author_id','author_id');
    }

}
