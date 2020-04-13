<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Question;
/**
 * Class DashboardController.
 */
class DashboardController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('backend.dashboard');
    }

    public function questions()
    {
        $questions = Question::all();
        return view('backend.questions', compact("questions"));
    }
}
