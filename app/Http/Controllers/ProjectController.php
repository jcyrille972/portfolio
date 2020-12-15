<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use App\Models\Project;
use Symfony\Component\Console\Input\Input;
use Symfony\Component\HttpFoundation\Session\Session;

class ProjectController extends Controller
{
   public function test()
   {
      return View::make('project');
   }
}
