<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller {

	public function setAgenda() {
		$agenda = DB::select("select * from agenda");

		return response()->json($agenda);
	}

}


?>
