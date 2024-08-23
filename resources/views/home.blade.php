@extends('layout')

@section('content')
    <h4 class="mb-3">All Tasks</h4>

    @foreach ( $todos as $todo)
    <div class="card mb-5 text-center">

        @if ($todo->isCompleted())
            <div class="card-body">
                <p class="card-text">{{$todo->task}} <span class="badge rounded-pill bg-success">completed</span></p>
                <form action="/delete/{{$todo->id}}" method='POST'>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>


        @else

            <div class="card-body">
                <p class="card-text">{{$todo->task}} <span class="badge rounded-pill bg-info">pending</span></p>

                <form action="/update/{{$todo->id}}" method='POST'>
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btn-primary">Completed ?</button>
                </form>

            </div>
        @endif
      </div>

    @endforeach
    <a href="/create-task" class="btn btn-dark">Create a Task</a>
@endsection



