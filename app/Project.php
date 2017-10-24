<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = "tbl_projects";

    //maakt hierdoor gebruik van de project_id inplaats van normale id
    protected $primaryKey = 'project_id';
}
