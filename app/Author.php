<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
  protected $table = 'authors';

  protected $primaryKey = 'author_id';

  protected $fillable = ['first_name','last_name'];
}
