@extends('layout')
@section('title', 'Users')
@section('content')

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if (Auth::user()->role == 'admin')
        <h1 class="font-semibold text-xl text-gray-800 leading-tight row justify-content-center mt-4">USERS</h1>
        <div class="py-12">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                @if ($allUsers->isEmpty())
                                    <p>No users found.</p>
                                @else
                                    <table class="table table-striped text-center">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Role</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($allUsers as $user)
                                                <tr>
                                                    <td>{{ $user->name }}</td>
                                                    <td>{{ $user->email }}</td>
                                                    <td>{{ $user->role }}</td>
                                                    <td>
                                                        <a href="{{ route('users.delete', ['user' => $user->id]) }}"
                                                            class="btn btn-danger">Delete</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
