@extends('layouts.app')

@section('title', 'All Companies')

@section('content')
    <h2>Companies</h2>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Customers</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($companies as $key=>$company)
                        <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <td><a class="text-reset" href="{{ route('companies.show', ['company' => $company]) }}">{{ $company->name }}</a></td>
                            <td>{{ $company->phone ?? 'N/A' }}</td>
                            <td>{{ $company->customers->count() }}</td>
                        </tr>
                    @empty
                        <td colspan="5">No Companies yet.</td>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
