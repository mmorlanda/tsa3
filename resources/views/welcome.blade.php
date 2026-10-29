@extends('layouts.app')

@section('content')
    <h1>Tasks for Today</h1>

    @forelse ($tasks as $task)
        <div class="card">
            <h2>{{ $task->title }}</h2>

            <p>
                Status:
                <span class="{{ $task->status }}">
                    {{ ucfirst($task->status) }}
                </span>
            </p>

            <p>Date: {{ $task->task_date->format('F d, Y') }}</p>
        </div>
    @empty
        <p>No tasks are scheduled for today.</p>
    @endforelse
@endsection