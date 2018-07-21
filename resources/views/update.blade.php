@extends('layouts')


@section('content')

    <div class="row">
        <div class="col-lg-12 ">
            <form action="{{route('todos.save',['id'=>$todo->id])}}" class="action" method="post">
                {{csrf_field()}}
                <h2 style=" margin: 5px;color:red" class="text-center  ">My To Do List</h2>
                <input type="text" class=" form-control input-lg" name="todo" value="{{$todo->todo}}" placeholder="Write a new ToDO">

            </form>
        </div>

    </div>
    <hr>


@stop