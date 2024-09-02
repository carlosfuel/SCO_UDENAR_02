<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimerControlador extends Controller
{
    function index(){
        return view('contact',['name' => 'Pedro']);
    }

    function otro($post=85, $otro=-100){
        echo $post;
        echo $otro;
    }
}
