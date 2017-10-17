<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class report extends Model
{
    //
    public $table = "report";

    public static function find1()
    {
      return static::where('id',1)->get();
    }

    public function returnPending($query)
    {
      return $query->where('status','=','pending');
    }

}
