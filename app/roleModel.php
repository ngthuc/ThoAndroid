<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class roleModel extends Model
{
    public $timestamps=false;
    protected $table = "role";
    protected $primaryKey ='RO_ID';
    protected $fillable=['update_at','create_at'];

    protected $dates  = ['update_at','create_at'];
}
