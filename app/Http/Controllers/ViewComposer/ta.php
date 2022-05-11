<?php

namespace App\Http\Controllers\ViewComposer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;
use Illuminate\View\View;

class ta extends Controller
{
    protected $tags;

    public function __construct(Tag $tags)
    {
        $this->tags = Tag::all();
    }

    public function compose(View $view)
    {
        return $view->with('tags', $this->tags);
    }
}
