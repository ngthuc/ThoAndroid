<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class requirementModel extends Model
{
    public $timestamps=false;
    protected $table = "requirement";
    protected $primaryKey ='RT_ID';
    const     CREATED_AT    = 'RT_DATECREATE';
    const     UPDATED_AT    = 'RT_DATEUPDATE';

}
