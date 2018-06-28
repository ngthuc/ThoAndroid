<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Session;



class userModel extends Model
{
    const     CREATED_AT    = 'UC_DATECREATE';
    const     UPDATED_AT    = 'UC_DATEUPDATE';
    protected $table = "user";
    protected $primaryKey ='id';
}
