@extends('layouts.app')

@section('content')

    <h1>Todos</h1>

    @if (count($todos) > 0)
        @foreach($todos as $todo)
            <div class="card m-2">
                <a href="{{route('todos.show', $todo->id)}}"><h2>{{$todo->title}}</h2></a>
                <h3>{{$todo->content}}</h3>
                <span class="badge badge-danger">{{ $todo->due }}</span>
            </div>
        @endforeach
    @endif

@endsection