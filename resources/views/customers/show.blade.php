@extends('layouts.app')

@section('title', $customer->name)

@section('content')
    <h2 class="title text-center">Customer Details</h2>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th scope="row">Name</th>
                        <td>{{ $customer->name }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Email</th>
                        <td>{{ $customer->email }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Phone Number</th>
                        <td>{{ $customer->phone ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Company</th>
                        <td>
                            <a class="text-reset" href="{{ route('companies.show', ['company' => $customer->company]) }}">{{ $customer->company->name }}</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Status</th>
                        <td>
                            {{ $customer->active }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="row">
                <div class="col-5">
                    <a class="btn btn-primary" href="{{ route('customers.edit', compact('customer')) }}">Edit Customer</a>
                    <form class="form-inline float-right" action="{{ route('customers.destroy', ['customer' => $customer]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit" onclick="return confirm('Are your sure?');">Delete Customer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
