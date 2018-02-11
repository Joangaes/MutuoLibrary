<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookInfo extends Model
{
  protected $table = 'book_infos';

  protected $primaryKey = 'book_info_id';

  protected $fillable = ['title','date_published','pages','isbn','genre','editorial','owner','library_id'];

  public function Library(){
    return $this->hasOne('App\Library','library_id','library_id');
  }
}
