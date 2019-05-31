<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;



class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getTasks() {
    	$remaining = DB::table('tasks')->where('status', '!=', 1)->get();
    	$done = DB::table('tasks')->where('status', '=', 1)->get();
      	return view('welcome', ['remaining' => $remaining,
      							'done' => $done
      	]);
    }

    public function insertTask(Request $request) {
    	DB::table('tasks')->insert([
    		[	'task' => $request->input('task'),
    			'description' => $request->input('description'),
    			'status' => 0
    		]
    	]);
    	return redirect()->back();
    }

    public function updateTask($id) {
    	DB::table('tasks')->where('id', $id)->update([
    		'status' => 1
    	]);
    	return redirect()->back();
    }

    public function deleteTask($id) {
    	DB::table('tasks')->where('id', $id)->delete();
    	return redirect()->back();
    }
}