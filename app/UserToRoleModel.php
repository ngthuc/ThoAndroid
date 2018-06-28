<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class userToRoleModel extends Model
{
    public $timestamps=false;
    protected $table = "role";
    protected $primaryKey ='RO_ID';
}
