<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rendez_vous extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function doctor(){
        return $this->belongsTo('App\Models\doctor');
    }

    public function user(){
        return $this->belongsTo('App\Models\user');
    }
}
