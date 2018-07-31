<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
	public function Index(){
		$array = array(
			"title" => "首页",
			"name"  => "matthew",
			"sex"   => "man",
			"age"   => "27"
			);
		return view("index")->with("array",$array);
	}
}
