<?php

namespace App\Http\Controllers;

use App\Bid;
use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){


       return view('admin.panel');

    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * or
     * @return void
     */
    public function edit($id){



            $bid = new Bid();
            $bid_to_edit = $bid->find($id);

            return view('admin.edit')->with(compact('bid_to_edit'));

    }
    public function add(){
        return 'add-new';
    }





}
