<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class unitrequirementtypeModel extends Model
{
    public $timestamps=false;

    protected $table = "unit_requirementtype";
    protected $primaryKey =['UN_ID', 'RT_ID'];
    public    $incrementing = false;
}
