<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AgendaController extends Controller {

	function index() {
		$agenda = DB::select("select * from agenda");
		//dd($agenda);

		$data = [ 'agenda' => $agenda ];

		return view('index', $data);

	}


	function detail($agenda_id, Request $request) {
		$agenda = DB::select('select * from agenda where id=?', [$agenda_id]);
		//cek data
		//dd($agenda);
		//var_dump($agenda);

		//ambil first element
		$task=reset($agenda);

		$data =[ 'task' => $task ];

		return view('detail', $data);
	}


	function add(Request $request) {
		$data = [ 'success' => false ];

		if ($request->isMethod('post')) {
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
		$agenda = DB::select('select * from agenda where id=?', [$agenda_id]);
		$foo = reset($agenda);

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
			'foo' => $foo ,
			'success' => $success
		];

		return view('edit', $data);
	}


	function delete(Request $request) {
		$bar = $request->input('task_id');
		$returnValue = DB::delete('delete from agenda where id=?', [$bar] );

		if ($returnValue) {
			return "Task deleted";
		} else {
			return "Error";
		}

	}

}

?>




