<?php

namespace App\Modules\Question;

use App\Models\Question;

class QuestionService implements QuestionServiceInterface
{


    public function getAll()
    {
        return Question::all();
    }

    public function getLatestWithPagination($paginate)
    {
        return Question::latest()->paginate($paginate);
    }

    public function getLatestWithEagerLoadPagination($paginate, $eagerLoad)
    {
        return Question::with($eagerLoad)->paginate($paginate);
    }
}