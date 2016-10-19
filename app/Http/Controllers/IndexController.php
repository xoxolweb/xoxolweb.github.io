<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Http\Requests;



class IndexController extends Controller
{
    //
    public function index(){



        return view('site.main');
    }

    public function category($category){



        return view('site.category')->with(compact('category'));
    }

    public function detail($category,$id){


        return view('site.detail')->with(compact('category','id'));
    }
}
