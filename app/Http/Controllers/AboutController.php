<?php

namespace App\Http\Controllers;

use App\Models\me;
use Illuminate\Http\Request;
use App\Models\Entreprise;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use Symfony\Component\Console\Input\Input;
use Symfony\Component\HttpFoundation\Session\Session;

class AboutController extends Controller
{
    public function test()
    {
        $me = me::all();
        return View::make('about')->with('me', $me);
    }
}
