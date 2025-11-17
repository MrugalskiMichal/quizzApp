<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['quiz_id', 'question_text', 'answer'];

    // Relacja do quizu
    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }
}
