@extends('layouts.app')

@section('title', isset($task) ? 'Edit Task' : 'Add Task')

@section('style')
<style>
    .error-message {
        color: red;
        font-size: 0.8rem;
    }
</style>
@endsection

@section('content')
<form
    action="{{ isset($task) ? route('tasks.update', ['task' => $task->id]) : route('tasks.store') }}"
    method="post"
    class="space-y-6 bg-white p-6 shadow rounded"
>
    @csrf
    @isset($task)
        @method('PUT')
    @endisset

    {{-- Title --}}
    <div>
        <label for="title" class="block uppercase text-sm font-medium text-slate-700 mb-1">Title</label>
        <input type="text" name="title" id="title"
            class="block w-full rounded-md border border-slate-300 p-2 text-sm shadow-sm focus:border-pink-500 focus:ring focus:ring-pink-200"
            value="{{ old('title', $task->title ?? '') }}">
        @error('title')
            <p class="error-message">{{ $message }}</p>
        @enderror
    </div>

    {{-- Description --}}
    <div>
        <label for="description" class="block uppercase text-sm font-medium text-slate-700 mb-1">Description</label>
        <textarea name="description" id="description" rows="5"
            class="block w-full rounded-md border border-slate-300 p-2 text-sm shadow-sm focus:border-pink-500 focus:ring focus:ring-pink-200">{{ old('description', $task->description ?? '') }}</textarea>
        @error('description')
            <p class="error-message">{{ $message }}</p>
        @enderror
    </div>

    {{-- Long Description --}}
    <div>
        <label for="long_description" class="block uppercase text-sm font-medium text-slate-700 mb-1">Long Description</label>
        <textarea name="long_description" id="long_description" rows="10"
            class="block w-full rounded-md border border-slate-300 p-2 text-sm shadow-sm focus:border-pink-500 focus:ring focus:ring-pink-200">{{ old('long_description', $task->long_description ?? '') }}</textarea>
        @error('long_description')
            <p class="error-message">{{ $message }}</p>
        @enderror
    </div>

    {{-- Submit --}}
    <div>
        <button type="submit"
            class="rounded bg-pink-500 px-4 py-2 text-white hover:bg-pink-600 focus:outline-none focus:ring-2 focus:ring-pink-300">
            @isset($task)
                Update Task
            @else
                Add Task
            @endisset
        </button>
    </div>
</form>
@endsection
