<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use function str_slug;

class Question extends Model
{
    public function user()
    {
        return $this->belongsTo('App\Model\User');
    }

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = str_slug($value);
    }
}
