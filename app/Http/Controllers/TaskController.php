<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index (){
        //mengambil semua data tasks di model
        $tasks = Task::getData();

        //mengirim data tasks ke view
        return view('tasks/index', [
            //mengisi variable tasks di index dengan variable tasks di model
            'tasks' => $tasks,
        ]);

    }

    public function show ($id){
        //mengambil data tasks di model berdasarkan id
        $taskById = Task::getById($id);

        //mengirim data tasks ke view
        return view ('tasks/details',[
            //mengisi variable tasks di show dengan variable tasks di model berdasarkan id
            'taskDetail' => $taskById,
        ]);
    }
}
