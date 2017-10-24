<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = "tbl_clients";

    public function projects(){
        return $this->hasMany('\App\Project');
    }

    public function offers() {
        return $this->hasMany('\App\Offer');
    }
}
