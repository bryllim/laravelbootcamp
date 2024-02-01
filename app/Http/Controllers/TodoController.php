<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Todo;

class TodoController extends Controller
{
    public function create(){
        $todo = new Todo();
        $todo->content = "Test content";
        $todo->status = "pending";
        $todo->save();

        return "Added a new todo!";
    }
}
