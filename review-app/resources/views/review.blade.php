@extends('layout')
<title>Review</title>
@section('forma')
@section('title_exemple')<h1 class="fw-light ">Leave a FeedBack for us</h1>

<form method="post" action="/review/ceck">
    @csrf
    <input type="email" name="email" id="email" placeholder="Introdu email" class="form-control"><br>
    <input type="subject" name="subject" id="subject" placeholder="Subject" class="form-control"><br>
    <textarea name="mesaj" id="mesaj" class="form-control" placeholder="mesaj" cols="30" rows="10"></textarea><br>
    <button type="submit" class="btn btn-success ">Expediaza</button>
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
