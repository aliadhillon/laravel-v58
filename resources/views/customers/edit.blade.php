@extends('layouts.app')

@section('title', "Edit {$customer->name}'s details")

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="title text-center">Edit {{ $customer->name }}'s details</h2>
            <form action="{{ route('customers.update', ['customer' => $customer]) }}" method="POST" class="pb-1">
                @method('PATCH')
                @include('customers.form', ['action' => 'Update'])
            </form>
        </div>
    </div>
@endsection
