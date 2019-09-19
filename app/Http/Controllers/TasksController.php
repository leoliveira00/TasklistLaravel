<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    private $task;

    public function __construct()
    {
        $this->task = new Task();
    }

    public function index()
    {
        $tasklist = Task::all();
        return view('tasks.index', [
            'tasks' => $tasklist
        ]);
    }

    public function novoView()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        Task::create($request->all());
        return redirect("/tasklist")->with("message", "Tarefa criada com sucesso.");
    }

    protected function getTask($id)
    {
        return $this->task->find($id);
    }

    public function editarView($id)
    {
        return view('tasks.edit', [
            'task' => $this->getTask($id)
        ]);
    }

    public function update(Request $request)
    {
        $task = $this->getTask($request->id);
        $task->tsk_titulo = $request->tsk_titulo;
        $task->tsk_status = $request->tsk_status;
        $task->save($request->all());
        return redirect("/tasklist")->with("message", "Tarefa alterada com sucesso.");
    }

    public function excluirView($id)
    {
        return view('tasks.delete', [
            'task' => $this->getTask($id)
        ]);
    }

    public function delete(Request $request)
    {
        var_dump($request->$id);
        //$this->getTask($id)->delete();
        //return redirect("/tasklist")->with("message", "Tarefa excluída com sucesso.");
    }
}
