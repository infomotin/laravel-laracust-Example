<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Issue;

class IssueController extends Controller
{
    //index
    public function index(){
        $issues = Issue::all();
        return view('issues.index', compact('issues'));
    }
    //create
    public function create(){
        return view('issues.create');
    }
    //store
    public function store(Request $request){
        $issue = new Issue();
        $issue->name = $request->name;
        $issue->priority = $request->priority;
        $issue->message = $request->message;
        $issue->save();
        return redirect()->route('issues.index');
    }
}
