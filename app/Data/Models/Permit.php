<?php

namespace App\Data\Models;

use Illuminate\Database\Eloquent\Model;

class Permit extends Model
{
    /**
       * The table associated with the model.
       *
       * @var string
       */
      protected $table = 'tbl_permiso';

      protected $primaryKey = 'per_intId';

      public $timestamps = false;
  
      /**
       * The attributes that are mass assignable.
       *
       * @var array
       */
      protected $fillable = ['per_strAbrebiatura', 'per_strNombre', 'per_strDescripcion'];
}
