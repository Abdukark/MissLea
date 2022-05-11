<?php

namespace App\Http\Controllers\ViewComposer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Color;
use Illuminate\View\View;

class Colo extends Controller
{
    protected $colors;

    public function __construct(Color $colors)
    {
        $this->colors = Color::all();
    }

    public function compose(View $view)
    {
        return $view->with('colors', $this->colors);
    }
}
