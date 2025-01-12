@extends('layouts.admin')

@section('title', 'Message Detail')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">Message Detail</h1>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Details</h6>
            </div>
            <div class="card-body">
                <p><strong>Name:</strong> {{ $message->nama }}</p>
                <p><strong>Email:</strong> {{ $message->email }}</p>
                <p><strong>Message:</strong></p>
                <p>{{ $message->message }}</p>

                <a href="{{ route('contactus.index') }}" class="btn btn-secondary">Back</a>
            </div>
        </div>
    </div>
@endsection
