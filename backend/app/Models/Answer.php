<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'answer1',
        'answer2',
        'answer3',
        'answer4',
        'correct_answer',
    ];

    /**
     * Get the question that relates to the answers.
     */
    public function question() {
        return $this->belongsTo(Question::class);
    }
}
