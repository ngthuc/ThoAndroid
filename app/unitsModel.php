<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class unitsModel extends Model
{
    public $timestamps=false;
    protected $table = "units";
    protected $primaryKey ='UN_ID';
    const     CREATED_AT    = 'UC_DATECREATE';
    const     UPDATED_AT    = 'UC_DATEUPDATE';
}
