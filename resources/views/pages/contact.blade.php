@extends('layouts.default')

@section('content')
    <div class="card mt-3 pl-2 pr-2">
        <div class="card-title"><h1>Contact</h1></div>
        <div class="card-body">
            <form action="/contact" method="post">
                @csrf
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input name="email" type="email" class="form-control" id="email" placeholder="name@example.com">
                </div>
                <div class="form-group">
                    <label for="Subject">Subject</label>
                    <input name="text" type="text" class="form-control" id="subject" placeholder="Subject">
                </div>
                <div class="form-group">
                    <label for="body">Message</label>
                    <textarea name="body" class="form-control" id="body" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary mb-2">Send</button>
            </form>
        </div>
    </div>
@endsection