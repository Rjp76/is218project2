@extends('layouts.default')

@section('content')
    <h1>Your message has been received!</h1>

    <div class="card mt-3 pl-2 pr-2">
        <div class="card-body">
            <label for="email"><b>Email address</b></label><br>
             {{$email}}<br><br>
            <label for="subject"><b>Subject</b></label> <br>
             {{$sub}} <br><br>
            <label for="body"><b>Message</b></label><br>
             {{$msg}}

        </div>
    </div>
@endsection