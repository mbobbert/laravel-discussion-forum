<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuestionController extends Controller
{
    public function index()
    {
        //create a new view object
        $questions = DB::table('questions')->get();

        $view = view('questions/index' , ['questions' => [$questions]]);

        //other option
        //$view->questions = $questions;
        return $view;

    }
    /**
     * shows a detail of questions
     */
    public function show($id)
    {


    $question = DB::table('questions')->find($id);

        //create a new view object
       $view = view('questions/show' , ['question' => $question]);
       //return the view
       return $view;
    }
}
