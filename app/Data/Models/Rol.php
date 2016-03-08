<?php

namespace App\Data\Models;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    /**
       * The table associated with the model.
       *
       * @var string
       */
      protected $table = 'tbl_rol';

      protected $primaryKey = 'rol_intId';

      public $timestamps = false;
  
      /**
       * The attributes that are mass assignable.
       *
       * @var array
       */
      protected $fillable = ['rol_strAbrebiatura', 'rol_strNombre', 'rol_strDescripcion'];
}
