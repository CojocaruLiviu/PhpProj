@extends('layout')
@section('title')
    Register
@endsection
@section('title_log')
    Register for free
@endsection

@section('inregistrare')
    <form method="post" action="/inregistrare">
        @csrf
        <div class="form-floating mb-3 ">
            <input type="text" name="email" class="form-control rounded-3" id="email" placeholder="email">
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="name" class="form-control rounded-3" id="name" placeholder="Name">
            <label for="floatingInput">Name/Surname </label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" name="password" class="form-control rounded-3" id="password" placeholder="pwd">
            <label for="floatingPassword">Password</label>
        </div>
        <button type="submit" class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" >
            Register
        </button>
    </form>


    {{--For show error at wrong inputs.--}}

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                @endforeach
            </ul>

        </div>
    @endif
@endsection


