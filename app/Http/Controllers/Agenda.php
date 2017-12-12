<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Agenda extends Controller {

	function index() {
		$agenda = DB::select("select * from agenda");
		//dd($agenda);

		$data = [ 'agenda' => $agenda ];

		return view('task/index', $data);

	}


	function detail($list, Request $request) {
		$agenda = DB::select('select * from agenda where id=?', [$list]);
		//cek data
		//dd($agenda);
		//var_dump($agenda);

		//ambil first element
		$task=reset($agenda);

		$data =[ 'task' => $task ];

		return view('task/detail', $data);
	}


	function add(Request $request) {
		$data = [ 'success' => false ];

		if ($request->isMethod('post')) {
			$agendaTask = $request->input('agenda_task');
			$agendaAssociate = $request->input('agenda_associate');
			$urgency = $request->input('urgency');

		        $returnValue = DB::insert('insert into agenda(task,associate,urgency) values(?,?,?)', 
			[$agendaTask,$agendaAssociate,$urgency] );

			if ($returnValue) {
				$data = [ 'success' => 1 ];
			}
		}

		return view('task/add',$data);
	}


	function edit($list, Request $request) {
		$agenda = DB::select('select * from agenda where id=?', [$list]);
		$task = reset($agenda);

		$success = false;
		if ($request->isMethod('post')) {
			$agendaTask = $request->input('agenda_task');
			$agendaAssociate = $request->input('agenda_associate');
			$urgency = $request->input('urgency');

			$returnValue = DB::update('update agenda set task=?, associate=?, urgency=? where id=?' , 
			[$agendaTask,$agendaAssociate,$urgency,$task] );
				if ($returnValue) {
					$success = true;
				}
		}

		$data = [
			'task' => $task ,
			'success' => $success
		];

		return view('task/edit', $data);
	}


	function delete(Request $request) {
		$taskId = $request->input('task_id');
		$returnValue = DB::delete('delete from agenda where id=?', [$taskId] );

		if ($returnValue) {
			return "Task deleted";
		} else {
			return "Error";
		}

	}

}

?>




