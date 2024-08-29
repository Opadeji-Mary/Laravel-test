@extends('contact.index')

@section('ContactText')
            @if (Auth::user())
            <div class="container">
                <div class="row">
                        @foreach ($contacts as $contact)
                         <div class="row shadow mb-4 p-3">
                            <div class="col-3">{{ $contact->contact_name }}</div>
                            <div class="col-3">{{ $contact->contact_no }}</div>
                            <div class="col-3">
                                <a href="/contact/{{ $contact->contact_id }}/edit">
                                    <button class="btn btn-success">Edit</button>
                                </a>
                            </div>
                            <div class="col-3">
                                <a href="contact/{{ $contact->contact_id }}">
                                    <button class="btn btn-danger">Delete</button>
                                </a>
                            </div> 
                         </div>
                        @endforeach
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