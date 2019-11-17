@extends('layouts.app')

@section('title', $user->name)

@section('content')
    <h2 class="title text-center">User Details</h2>
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th scope="row">Name</th>
                        <td>{{ $user->name }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Email</th>
                        <td>{{ $user->email }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Email Varified</th>
                        <td>
                            @if ($user->email_verified_at)
                                <strong class="text-success">{{ $user->email_verified_at->toDateString() }}</strong>
                            @else
                                <strong class="text-danger">Not Verified</strong>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
            <a class="btn btn-primary" href="{{ route('edit') }}">Edit Your Profile</a> 
        </div>
    </div>
@endsection
