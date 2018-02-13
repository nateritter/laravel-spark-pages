<?php

namespace NateRitter\LaravelSparkPages;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = ['body', 'published', 'slug', 'title'];
}
