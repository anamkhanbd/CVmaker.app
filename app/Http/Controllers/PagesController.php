<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    //Pages 
    public function cvmaker(){
        return view('pages.cvmaker');
    }

    //template
    public function professonal(){
        return view('pages.professonal');
    }

    public function normal(){
        return view('pages.normal');
    }

    //cv form 
    public function cvform(){
        return view('pages.cv-form');
    }










}
