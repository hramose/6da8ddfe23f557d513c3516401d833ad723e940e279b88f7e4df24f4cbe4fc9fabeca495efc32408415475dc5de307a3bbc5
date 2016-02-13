<?php

namespace App\Data\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_users';

    protected $primaryKey = 'usr_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['usr_firstName', 'usr_lastName', 'usr_userName', 'usr_email', 'usr_password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['usr_password', 'remember_token'];
}