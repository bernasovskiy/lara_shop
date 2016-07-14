@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            @include('common.errors')

            <div class="panel panel-default">
                <div class="panel-heading">New task</div>

                <div class="panel-body">
                    <form method="POST" action="{{ route('create') }}">
                        {{ csrf_field() }}
                        <input type="text" class="form-control" name="desc" placeholder="Task description">

                        <input type="submit" value="Create new task" class="btn btn-primary">
                    </form>
                        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
