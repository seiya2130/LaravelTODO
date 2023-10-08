@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>タスクを追加</h2>

        <form action="{{ route('tasks.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label>タイトル</label>
                <input type="text" name="title" class="form-control" required>
            </div>

            <div class="form-group">
                <label>説明</label>
                <textarea name="description" class="form-control" rows="5"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">保存</button>
        </form>
    </div>
@endsection
