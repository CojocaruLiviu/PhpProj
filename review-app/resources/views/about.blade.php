@extends('layout')
@section('title_exemple')<h1 class="fw-light text-center ">FeedBack about us</h1>
<p class="lead text-white text-center">
    <img src="/images/feedbacks.png" width="350px"  alt="Image Description"></br>
    There is all FeedBack at all users, U can leave a FeedBack and see it in this page.
</p>
@endsection
@section('nav_bar')
<title>About</title>
<h1 class="container">Latest feedback</h1>
{{--reverse converting to array el and use array_reverse--}}
<div class="container">
    @foreach(array_reverse($rewievs->toArray()) as $el)
        <div class="alert alert-warning">
            <h3>{{$el['subject']}}</h3>
            <p>{{$el['mesaj']}}</p>
            <p>{{$el['email']}}</p>
        </div>
    @endforeach

</div>

@endsection
