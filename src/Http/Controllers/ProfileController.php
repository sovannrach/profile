<?php

namespace Sovannrach\Profile\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile::profile');
    }
}
