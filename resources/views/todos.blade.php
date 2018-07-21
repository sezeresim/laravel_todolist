@extends('layouts')


@section('content')

    <div class="row">
        <div class="col-lg-12 col-lg-offset">
            <form action="/create/todo" class="action" method="post">
                {{csrf_field()}}
                    <h2 style=" margin: 7px;color:orange" class="text-center  ">My To Do List</h2>
                <br>
                <input type="text" class=" form-control input-lg" name="todo" placeholder="Write a new ToDO">

            </form>
        </div>

    </div>
    <hr>
<div style="margin-left: 20px"> @foreach($todos as $todo)

        {{$todo->todo}}
        <a href="{{route('todo.delete',['id'=>$todo->id])}}" class="btn btn-danger">Sil</a>
        <a href="{{route('todo.update',['id'=>$todo->id])}}" class="btn btn-primary">Düzenle</a>


        @if(!$todo->completed)
            <a href="{{route('todos.completed',['id'=>$todo->id])}}" class="btn btn-xs btn-success">Tamamlandı</a>
        @else
            <span class="text-success">Tamamlandı</span>
        @endif
        <hr>
    @endforeach</div>


    @stop