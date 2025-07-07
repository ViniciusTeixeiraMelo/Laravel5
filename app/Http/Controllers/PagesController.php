<?php

namespace App\Http\Controllers;

class PagesController extends Controller{

    public function getIndex(){
        # process varieable data or parms
        # talk to the model
        # receive from the model
        # compile or process data from the model if needed
        # pass that to the correct view

        return view('pages.welcome');
    }

    public function getAbout(){

        $first ="vinïcius";
        $middle = "teixeira";
        $last = " melo";

        $fullName = "$first $middle $last";  
        $email = "viniciust.melo@gmail.com";
        $data = [];

        $data['email'] = $email; 
        $data['fullName'] = $fullName; 
        return view('pages.about')->with('data', $data);
    }

    public function getContact(){
        return view('pages.contact');
    }

    public function postContact(){    

    }


}