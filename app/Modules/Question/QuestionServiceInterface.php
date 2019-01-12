<?php
/**
 * Created by PhpStorm.
 * User: diar
 * Date: 19-01-12
 * Time: 9.01.MD
 */

namespace App\Modules\Question;


interface QuestionServiceInterface
{
    public function getAll();

    public function getLatestWithPagination($paginate);
}