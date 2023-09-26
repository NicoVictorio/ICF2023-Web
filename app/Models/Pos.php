<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pos extends Model
{
    public $timestamps = false;
    public function logs(){
        return $this->belongsTo(Logs::class);
    }
}
