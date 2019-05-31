<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getTasks() {
    	$remaining = DB::table('tasks')->where('status', '!=', 1)->get();
    	$done = DB::table('tasks')->where('status', '=', 0)->get();
      	return view('welcome', ['remaining' => $remaining,
      							'done' => $done
      	]);
    }
}
