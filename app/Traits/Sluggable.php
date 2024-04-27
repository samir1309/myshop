<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait Sluggable
{
    public function setUrlAttribute($value)
    {
        $this->attributes['url'] = Str::slug($value);
    }
}