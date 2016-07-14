<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Task;

class TasksController extends Controller
{

	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
    	$tasks = Task::all();

    	return view('tasks.index', ['tasks' => $tasks]);
    }

    public function new_task() {
    	return view('tasks.new');
    }

    public function create(Request $request) {
    	$this->validate($request, [
    			'desc' => 'required',
    		]);

    	$request->user()->tasks()->create([
    			'desc' => $request->desc,
    		]);

    	return redirect('/');
    }

    public function change_status(Request $request) {
    	$task = Task::find($request->id);
    	$task->change_status();

    	return redirect('/');
    }

    public function destroy(Request $request) {
    	$task = Task::find($request->id);
    	$task->delete();

    	return redirect('/');
    }
}
