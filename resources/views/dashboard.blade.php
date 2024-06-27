@extends('layout')
@section('content')
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>
        <div class="card">
            <div class="card-header">{{ __("You're logged in!") }}</div>
        </div>
    </x-app-layout>
@endsection
