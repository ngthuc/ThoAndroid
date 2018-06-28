<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class propertiesModel extends Model
{
    public $timestamps=false;

    protected $table = "properties";
    protected $primaryKey ='PP_ID';

}
