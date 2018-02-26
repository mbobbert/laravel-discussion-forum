<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        //create a new view object
        $view =view('questions/index');
        //return the view
       return $view;
    }
    /**
     * shows a detail of questions
     */
    public function show()
    {

       $view =view('questions/show');
       return $view;
    }
}
