<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Qestion;

class QestionController extends Controller
{
    public function index() {
        $qestions = Qestion::orderBy('created_at', 'desc')->get();
        return view('index', compact('qestions'));
    }

    public function create(Request $request) {
        Qestion::create(['title' => $request->title, 'text' => $request->text, 'answer' => $request->answer]);
        return redirect('/');
    }

    public function transition(Qestion $qestion) {
        return view('questions', compact('qestion'));
    }
}
