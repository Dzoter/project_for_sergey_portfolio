@extends('layout.layout')

@section('content')
    <form method="post" action="{{route('doLogin')}}">
        @csrf
        <div class="form-group" >
            <label for="login">Логин</label>
            <input type="text" class="form-control" id="login" name="login"  placeholder="введите логин">

        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Пароль</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
