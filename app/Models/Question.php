<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use function str_slug;

class Question extends Model
{
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = str_slug($value);
    }

    public function getUrlAttribute()
    {
        return route("questions.show", $this->id);
    }

    public function getCreatedDateAttribute()
    {
        return $this->created_at->diffForHumans();
    }
}
