<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Killers extends Model
{
    protected $fillable = ['name', 'skill', 'bio', 'dojo_id'];

    /**@use HasFactory<\Database\Factories\KillersFactory> **/
    use HasFactory;

    public function dojo() {
        return $this->belongsTo(Dojo::class);
    }

    //$killer->dojo->name
}
