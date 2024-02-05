<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Todo;

use Auth;

class TodoController extends Controller
{

    public function create(Request $request){
        $todo = new Todo();
        $todo->content = $request->content;
        $todo->status = "pending";
        $todo->user_id = Auth::user()->id;
        $todo->save();

        return redirect()->route('home')->with('success', "Added new task successfully!");
    }
}
