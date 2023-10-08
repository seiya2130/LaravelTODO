@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>タスクを編集</h2>

        <form action="{{ route('tasks.update', $task->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>タイトル</label>
                <input type="text" name="title" value="{{ $task->title }}" class="form-control" required>
            </div>

            <div class="form-group">
                <label>説明</label>
                <textarea name="description" class="form-control" rows="5">{{ $task->description }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">更新</button>
        </form>
    </div>
@endsection
