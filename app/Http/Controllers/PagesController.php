<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class PagesController extends Controller
{
    public function home(){
        return view('home');
    }
    
    public function Bagian1(){
        return view('bagian1');
    }
    
    public function Bagian2(){
        return view('bagian2');
    }
    public function Bagian3(){
        return view('bagian3');
    }

    public function welcome(){
        return view('welcome');
    }
}
