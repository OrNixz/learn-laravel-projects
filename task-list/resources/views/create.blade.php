@extends('layouts.app')

@section('title', 'Create a task')

@section('content')
    {{ $errors }}
    <form action="{{ route('tasks.store' ) }}" method="post">
        @csrf
        <div class="">
            <label for="title">Title</label>
            <input type="text" name="title" id="title">
        </div>

        <label for="description">Description</label>
        <textarea name="description" id="description" rows="5"></textarea>

        <label for="long_description">Long Description</label>
        <textarea name="long_description" id="long_description" rows="10"></textarea>

        <button type="submit">Add Task </button>
    </form>
@endsection
