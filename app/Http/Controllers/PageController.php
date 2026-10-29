<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;

class PageController extends Controller
{
    public function welcome()
    {
        $tasks = Task::whereDate('task_date', today())
            ->orderBy('task_date')
            ->get();

        return view('welcome', compact('tasks'));
    }

    public function tasks()
    {
        $tasks = Task::orderBy('task_date')
            ->orderBy('id')
            ->get();

        return view('tasks', compact('tasks'));
    }

    public function profile()
    {
        $user = User::firstOrFail();

        return view('profile', compact('user'));
    }

    public function about()
    {
        return view('about');
    }
}