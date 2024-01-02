@extends('layout')
@section('loged')
        @if(Auth::check())
        <div class="text-center py-md-5 ">
                <img src="/images/welcome.png" height="150px" alt="Image Description">
            <h2>Welcome, {{ Auth::user()->name }}!</h2>
        </div>
        @else
            <h2>Eroare</h2>
        @endif
@endsection

