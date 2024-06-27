@extends('layout')
@section('content')
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>
        @if (Auth::user()->role == 'admin')
            <h1 class="font-semibold text-xl text-gray-800 leading-tight row justify-content-center mt-4">USERS</h1>
            <div class="py-12">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">{{ __("You're logged in!") }}</div>
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
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($allUsers as $user)
                                                    <tr>
                                                        <td>{{ $user->name }}</td>
                                                        <td>{{ $user->email }}</td>
                                                        <td>{{ $user->role }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    @endif
        @endif
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
    </x-app-layout>
@endsection
