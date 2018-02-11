<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loans extends Model
{
  protected $table = 'loans';

  protected $primaryKey = 'loan_id';

  protected $fillable = ['user_id','book_id','retrieval_date','return_date','real_return_date'];

  public function Book(){
    return $this->belongsTo('App\Book','book_id','book_id');
  }

  public function User(){
    return $this->belongsTo('App\User','user_id','id');
  }
}
