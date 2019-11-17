@extends('layouts.app')

@section('title', $company->name)

@section('content')
    <h2 class="title">{{ $company->name }}</h2>
    <p>Phone: {{ $company->phone }}</p>
    <hr>
    <h4>Company Customers</h4>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($company->customers as $key=>$customer)
                        <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <td><a class="text-reset" href="{{ route('customers.show', ['customer' => $customer]) }}">{{ $customer->name }}</a></td>
                            <td>{{ $customer->email }}</td>
                            <td>{{ $customer->phone ?? 'N/A' }}</td>
                            <td>
                                {{ $customer->active }}
                            </td>
                        </tr>
                    @empty
                        <td colspan="5">No Customers yet.</td>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
