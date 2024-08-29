@extends('contact.index')

@section('ContactText')
        @if (Auth::user())         
    <div class="container">
        <div class="row">
            <div class="col-6 mx-auto">
                <div class="shadow p-3">
                    <h1>Add Contact</h1>
                    <form action="/create/contact" method="POST">
                        @csrf
                        <input type="text" class="form-control" placeholder="contact name" name="contact_name">
                        <input type="text" class="form-control" placeholder="contact" name="contact_no">
                        <button class="btn btn-success" type="submit">Add contact</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
        @else
            <div class="row">
                <div class="col-12 col-md-6 mx-auto shadow">
                    <h3 class="text-center mt-5">your account is not logged in !!
                    <a href="/login">login</a>
                    </h3>
                </div>
            </div> 
        @endif


@endsection