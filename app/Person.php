<?php

namespace App\Data\Models;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = 'tbl_persona';

    protected $primaryKey = 'prs_intId';

    public $timestamps = false;

    protected $fillable = ['prs_strDocumento', 'prs_strTipoDocumento', '', '', ''];
    //protected $guarded = ['*'];
}
