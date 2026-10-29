@extends('layouts.app')

@section('content')
    <h1>All Tasks</h1>

    @foreach ($tasks as $task)
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
    @endforeach
@endsection