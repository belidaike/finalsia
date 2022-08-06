<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delicacys extends Model
{
    use HasFactory;

    protected $fillable = ['place_id', 'food', 'texture', 'taste'];

    public function place() {
        return $this->belongsTo('App\Models\Place');
    }
}
