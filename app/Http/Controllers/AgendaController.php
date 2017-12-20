<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AgendaController extends Controller {



public function __construct () {
//Security untuk check apakah user sudah Login atau belum
//Kalau belum akan redirect ke Login
$this->middleware('auth');
}



	function index() {
		$agendas = DB::select("select * from agenda");
		//dd($agenda);

		$data = [ 'agendas' => $agendas ];

		return view('index', $data);

	}


	function detail($agenda_id, Request $request) {
		$agendas = DB::select('select * from agenda where id=?', [$agenda_id]);
		//cek data
		//dd($agendas);
		//var_dump($agendas);

		//ambil first element
		$task=reset($agendas);

		$data =[ 'task' => $task ];

		return view('detail', $data);
	}


	function add(Request $request) {
		$data = [ 'success' => false ];

		if ($request->isMethod('post')) {
						//name! di view nya, kalo id biasanya buat css dan javascript
			$task = $request->input('task');
			$associate = $request->input('associate');
			$urgency = $request->input('urgency');

		        $returnValue = DB::insert('insert into agenda(task,associate,urgency) values(?,?,?)', 
			[$task,$associate,$urgency] );

			if ($returnValue) {
				$data = [ 'success' => 1 ];
			}
		}

		return view('add',$data);
	}


	function edit($agenda_id, Request $request) {
		$agendas = DB::select('select * from agenda where id=?', [$agenda_id]);
		$agenda = reset($agendas);

		$success = false;
		if ($request->isMethod('post')) {
			$task = $request->input('task');
			$associate = $request->input('associate');
			$urgency = $request->input('urgency');

			$returnValue = DB::update('update agenda set task=?, associate=?, urgency=? where id=?' , 
			[$task,$associate,$urgency,$agenda_id] );
				if ($returnValue) {
					$success = true;
				}
		}

		$data = [
			'agenda' => $agenda ,
			'success' => $success
		];

		return view('edit', $data);
	}


	function delete(Request $request) {
		$taskID = $request->input('task_id');
		$returnValue = DB::delete('delete from agenda where id=?', [$taskID] );

		if ($returnValue) {
			return "Task deleted";
		} else {
			return "Error";
		}

	}

}

?>




