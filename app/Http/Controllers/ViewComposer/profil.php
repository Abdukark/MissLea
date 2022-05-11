<?php

namespace App\Http\Controllers\ViewComposer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profile;
use Illuminate\View\View;

class profil extends Controller
{
    protected $profiles;

    public function __construct( Profile $profile )
    {
        $this->profiles = $profile->all();
    }


    public function compose(View $view)
    {
        return $view->with('profiles', $this->profiles);
    }
}
