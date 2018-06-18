<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;


class Model extends Eloquent
{
  //Alowe spicific field to submitied 
  //protected $filable = ['title' , 'body'];

  //Excude spicific field from submiti
  // ex .
  // protected $guarded = ['user_id]; //Exsept all submited field without user_id field 

  protected $guarded = [];
}