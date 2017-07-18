<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class route extends Model
{
    protected $fillable = ['id','from','to','departure_time','date','updated_at','created_at'];
}
