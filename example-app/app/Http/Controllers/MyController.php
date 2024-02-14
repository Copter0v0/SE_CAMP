<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MyController extends Controller
{
    private $myvar = "Cyka!";
    function __construct()
    {

    }
    function index(){
        $users = DB::table('users')->select('email')->get();
        return view('titles.index');
    }
    function store(){

    }
}
