<?php

namespace App\Modules\Question;

use App\Models\Question;

class QuestionService implements QuestionServiceInterface
{


    public function getAll()
    {
        return Question::all();
    }
}