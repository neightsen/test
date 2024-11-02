<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Answer;
use App\Models\Qestion;

class AnswerController extends Controller
{
    public function store(Request $request, Qestion $qestion) {
        $qestion -> answers() -> create($request->all()); 
        return view()->route('question', $qestion);
    }
}
