@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">

                    <a class="btn btn-info" href="{{ route('new') }}">Create new task</a>
                    <table class="table table-strip">
                        <thead>
                            <th>
                                Desc
                            </th>
                            <th>
                                Status
                            </th>
                            <th>
                                Author
                            </th>
                            <th></th>
                        </thead>
                        <tbody>
                            @foreach($tasks as $task)
                                <tr>
                                    <td>
                                        {{ $task->desc }}
                                    </td>
                                    <td>
                                        <form action="{{ route('change_status', $task->id) }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('PUT') }}

                                            <input type="submit" value="Change status"
                                            @if($task->status)
                                                class="btn btn-success" 
                                            @else
                                                class="btn btn-danger"
                                            @endif 
                                            >
                                        </form>
                                    </td>
                                    <td>
                                        {{ $task->user->name }}
                                    </td>
                                    <td>
                                        <form action="{{ route('delete', $task->id) }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}

                                            <input type="submit" value="Delete task" class="btn btn-danger">
                                        </form> 
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
