<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = "tbl_clients";

    public function projects(){
        return $this->hasMany('\App\Project');
    }
}
