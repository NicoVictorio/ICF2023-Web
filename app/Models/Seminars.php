<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seminars extends Model
{
    public $timestamps = false;
    public function pseminars(){
        return $this->hasMany(Pseminars::class);
    }
}
