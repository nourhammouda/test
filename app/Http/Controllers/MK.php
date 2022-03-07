<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MK extends Controller
{
    //
    public function blabla(){

   /*     $obj1= new \stdClass();
        $obj1 -> name='bla bka bka ';
        $obj1 -> age= 17;

        return view('mywelcome',compact('obj1'));
        */
         /*$data=['Nour','hammouda']; */
         $data=[];
        return view('mywelcome',compact('data'));
}
}
