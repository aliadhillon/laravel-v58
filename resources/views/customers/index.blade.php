@extends('layouts.app')

@section('title', 'All Customers')

@section('content')
    <div class="mb-2">
        <h2>Customers</h2>
        <a href="{{ route('customers.create') }}">Add new Customer</a>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Company</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($customers as $key=>$customer)
                        <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <td>
                                <a class="text-reset" href="{{ route('customers.show', ['customer' => $customer]) }}">{{ $customer->name }}</a>
                            </td>
                            <td>{{ $customer->email }}</td>
                            <td>{{ $customer->phone ?? 'N/A' }}</td>
                            <td>
                                <a class="text-reset" href="{{ route('companies.show', ['company' => $customer->company]) }}">{{ $customer->company->name }}</a>
                            </td>
                            <td>{{ $customer->active }}</td>
                            {{-- <td>
                                @if ($customer->active)
                                    <strong class="text-success">Active</strong>
                                @else
                                    <strong class="text-danger">Inactive</strong>
                                @endif
                            </td> --}}
                        </tr>
                    @empty
                        <td colspan="6">No Customers yet.</td>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
