@extends('layouts.master')

@section('main')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Is Active</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Birth Date</th>
                <th scope="col">Created At</th>
                <th scope="col">Updated AT</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sellers as $seller)
                <tr>
                    <th scope="row">{{ $seller->id }}</th>
                    <td>{{ $seller->name }}</td>
                    <td>{{ $seller->email }}</td>
                    <td>{{ $seller->is_active }}</td>
                    <td>{{ $seller->phone_number }}</td>
                    <td>{{ $seller->birth_date }}</td>
                    <td>{{ $seller->created_at }}</td>
                    <td>{{ $seller->updated_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $sellers->links() }}
@endsection
