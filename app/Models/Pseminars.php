<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pseminars extends Model
{
    public $timestamps = false;
    public function seminars()
    {
        return $this->belongsTo(Seminars::class);
    }

}
