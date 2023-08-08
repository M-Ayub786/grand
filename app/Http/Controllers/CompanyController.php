<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    function index1(){
        return view('web/index');
    }
    function about1(){
        return view('web.about');
    }
    function contact1(){
        return view('web.contact-us');
    }
    function side1(){
        return view('web.side-bar');
    }
    function layout1(){
        return view('web.layout');
    }
}
