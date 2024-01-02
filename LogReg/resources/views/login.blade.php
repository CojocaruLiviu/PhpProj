@extends('layout')
@section('title')login @endsection
@section('title_log')
    Sign up for free
@endsection
@section('logare')

        <form method="post" action="/inregistrare/ceck">
        @csrf

        <div class="form-floating mb-3">
            <input type="email" name="email" class="form-control rounded-3" id="email" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" name="password" class="form-control rounded-3" id="password" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>
        <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">
            Login
        </button>
        <small class="text-body-secondary text-center d-block">By clicking Sign up, you agree to the terms of use.</small>
        <small class="text-body-secondary text-center d-block">Or</small>
        <button class="w-100 py-2 mb-2 btn btn-outline-primary rounded-3">
            <a href="/inregistrare" class="nav-link">
                <svg class="bi me-1" width="16" height="16"></svg>
                Register
            </a>
        </button>
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
        <hr class="my-4">
        <h2 class="fs-5 fw-bold mb-3">Or use a third-party</h2>
        <button class="w-100 py-2 mb-2 btn btn-outline-secondary rounded-3" type="submit">
            <svg class="bi me-1" width="16" height="16"><use xlink:href="#twitter"></use></svg>
            Sign up with Twitter
        </button>
        <button class="w-100 py-2 mb-2 btn btn-outline-primary rounded-3" type="submit">
            <svg class="bi me-1" width="16" height="16"><use xlink:href="#facebook"></use></svg>
            Sign up with Facebook
        </button>
        <button class="w-100 py-2 mb-2 btn btn-outline-secondary rounded-3" type="submit">
            <svg class="bi me-1" width="16" height="16"><use xlink:href="#github"></use></svg>
            Sign up with GitHub
        </button>
    </form>

@endsection

