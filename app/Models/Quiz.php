<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    // Zezwolenie na masowe przypisanie
    protected $fillable = ['title'];

    // Relacja do pytań
    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
