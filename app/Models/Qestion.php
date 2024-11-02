<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Qestion extends Model
{
    protected $fillable = ['title', 'text', 'answer'];

    public function answers(Qestion $qestion) {
        return $this->hasMany(Answer::class, 'answer');
    }
}
