@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{ route('tasks.create') }}" class="btn btn-primary mb-3">新しいタスクを追加</a>

        <ul class="list-group">
            @foreach($tasks as $task)
                <li class="list-group-item">
                    <strong>{{ $task->title }}</strong>
                    <p>{{ $task->description }}</p>
                    <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-warning">編集</a>
                    <form action="{{ route('tasks.destroy', $task->id) }}" method="post" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" onclick="return confirm('削除してもよろしいですか？')">削除</button>
                    </form>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
