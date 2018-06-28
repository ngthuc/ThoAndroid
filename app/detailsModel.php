<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detailsModel extends Model
{
    public $timestamps=false;
    protected $table = "details";
    protected $primaryKey ='PP_ID';
    const     CREATED_AT    = 'UC_DATECREATE';
    const     UPDATED_AT    = 'UC_DATEUPDATE';
}
