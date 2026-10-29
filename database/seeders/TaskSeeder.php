<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'username' => 'student01',
            'full_name' => 'Your Full Name',
            'email' => 'student01@example.com',
        ]);

        Task::create([
            'title' => 'Complete Laravel migration',
            'status' => 'completed',
            'task_date' => today(),
        ]);

        Task::create([
            'title' => 'Create the Task model',
            'status' => 'pending',
            'task_date' => today(),
        ]);

        Task::create([
            'title' => 'Build the Welcome page',
            'status' => 'pending',
            'task_date' => today(),
        ]);

        Task::create([
            'title' => 'Review database structure',
            'status' => 'completed',
            'task_date' => today()->subDay(),
        ]);

        Task::create([
            'title' => 'Create Blade layout',
            'status' => 'pending',
            'task_date' => today()->subDay(),
        ]);

        Task::create([
            'title' => 'Test Eloquent queries',
            'status' => 'pending',
            'task_date' => today()->subDays(2),
        ]);

        Task::create([
            'title' => 'Prepare GitHub repository',
            'status' => 'pending',
            'task_date' => today()->subDays(2),
        ]);

        Task::create([
            'title' => 'Deploy the application',
            'status' => 'pending',
            'task_date' => today()->addDay(),
        ]);
    }
}