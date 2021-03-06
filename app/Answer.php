<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    public function questions()
    {
        return $this->belongsTo(‘App\Question’,’id’, ‘question_id’);
    }
}
