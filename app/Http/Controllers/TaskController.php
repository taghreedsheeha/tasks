<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TaskController extends Controller
{
    public function index(){
        //$tasks =[
           // 'task_1',
         //   'task_2',
       // ];
       $tasks =DB::table('tasks')->where('name','like','task %')->get();
        return view('/about',compact('tasks'));
    }
    public function wel(){
        return view('welcome');

    }
    public function cont(){
        return view('/contact');
    }

    public function show($id){
        $tasks =DB::table('tasks')->find($id);
        return view('/task',compact('tasks'));
    }

}
