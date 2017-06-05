<?php

namespace App\Http\Controllers\SubAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class SuperAdminController extends Controller
{
    public function dashboard($value='')
    {
    	return view('subadmin.body');
    }
}
