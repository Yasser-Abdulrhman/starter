<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class FirstController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except('getIndex');
       
    }

    public function showString(){
        return 'static word';


    }

    public function getIndex()
    {
        $data = [];
        $data['Name']='Yassr';
        $data['Age']=44;
        $data['Length']=180;
        return view('welcome' ,  compact('data'));
        //return view('welcome');
    }

    public function showString1(){
        return 'static word 1';

    }
    public function showString2(){
        return 'static word 2';

    }
}
