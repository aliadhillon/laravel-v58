@extends('layouts.app')

@section('title', 'Create Customer')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="title text-center">Add new Customer</h2>
            <form action="{{ route('customers.store') }}" method="post" class="pb-1">
                @include('customers.form', ['action' => 'Create'])
            </form>
        </div>
    </div>
@endsection
