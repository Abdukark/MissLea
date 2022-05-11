<?php

namespace App\Http\Controllers\ViewComposer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\View\View;

class produc extends Controller
{
    protected $products;

    public function __construct(Product $products)
    {
        $this->products = Product::all();
    }

    public function compose(View $view)
    {
        return $view->with('products', $this->products);
    }
}
