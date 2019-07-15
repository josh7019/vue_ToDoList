<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\todoList;

class homeController extends Controller
{
    function index(){
        return view('home.index');
    }
    // function index2(){
    //     return view('home.index2');
    // }

    function delete(Request $request){
        $todoItem=todoList::find($request->id);
        $todoItem->delete();
        return response("ok",200);
    }
}
