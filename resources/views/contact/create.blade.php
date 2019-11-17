@extends('layouts.master')

@section('title', 'Contact Us')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="title text-center">Contact Us</h2>
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {!! session('status') !!}
                </div>
            @else
            <form action="{{ route('contact.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input class="form-control @error('name') is-invalid @enderror"
                           type="text" name="name" id="name" value="{{ old('name') }}"
                           placeholder="Enter your name here"
                           >
                    @error('name')
                        <span class="invalid-feedback">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input class="form-control @error('email') is-invalid @enderror"
                           type="email" name="email" id="email" value="{{ old('email') }}"
                           placeholder="Enter your email here"
                           >
                    @error('email')
                        <span class="invalid-feedback">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control @error('message') is-invalid @enderror" name="message" id="message" cols="30" rows="10" placeholder="Enter your message here">
                        {{ old('message') }}
                    </textarea>
                    @error('message')
                        <span class="invalid-feedback">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Send Message</button>
                </div>
            </form>
            @endif
        </div>
    </div>
@endsection
