<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodolistFormController extends Controller
{
    //タスク一覧で表示
    public function index()
    {
        $todos = Todo::orderBy('id', 'asc')->get();
        return view('todo_list', [
            "todos" => $todos
        ]);
    }

    public function createPage()
    {
        return view('todo_create');
    }

    public function create(Request $request)
    {
        $todo = new Todo();
        $todo->task_name = $request->task_name;
        $todo->task_description = $request->task_description;
        $todo->assign_person_name = $request->assign_person_name;
        $todo->estimate_hour = $request->estimate_hour;
        $todo->save();

        return redirect('/');
    }

    public function editPage($id)
    {
        $todo = Todo::find($id);
        return view('todo_edit', ["todo" => $todo]);
    }

    public function edit(Request $request)
    {
        Todo::find($request->id)->update([
            'task_name' => $request->task_name,
            'task_description' => $request->task_description,
            'assign_person_name' => $request->assign_person_name,
            'estimate_hour' => $request->estimate_hour
        ]);
        return redirect('/');
    }

    public function deletePage($id)
    {
        $todo = Todo::find($id);
        return view('todo_delete', ["todo" => $todo]);
    }


    // タスクを削除
    public function delete(Request $request)
    {
        Todo::find($request->id)->delete();
        return redirect('/');
    }


}
