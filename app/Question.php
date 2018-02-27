<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['title', 'text'];
    public function answers()
    {
        return $this->hasMany(“App\Answer’ , ‘question_id’);
    }

    public function scopeNotEmpty($query)
    {
        return $query->whereNotNull(‘text’);
    }

}
