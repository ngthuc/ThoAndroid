<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class requirementtypeModel extends Model
{
    public $timestamps=false;
    protected $table = "requirement_type";
    protected $primaryKey ='RT_ID';

}
