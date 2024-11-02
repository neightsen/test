<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = ['question_id', 'answerText'];

    public function question(Answer $answer) {
        return $this -> belongsTo(Qestion::class, 'qestion');
    }
}
