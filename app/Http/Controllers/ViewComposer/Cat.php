<?php

namespace App\Http\Controllers\ViewComposer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\View\View;

class Cat extends Controller
{
    protected $categories;

    public function __construct(Category $categories)
    {
        $this->categories = Category::all();
    }
    
    public function compose(View $view)
    {
        return $view->with('categories', $this->categories);
    }
}
