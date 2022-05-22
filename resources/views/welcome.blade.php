@extends('layout.index')

@section('content')

@if ($message = Session::get('success'))

<div class="alert alert-success">

    <p>{{ $message }}</p>

</div>

@endif

<div class="container">
        <div class="text-center">
            <h1>Welcome to InventTrack</h1>
            <a href="{{ route('inventory') }}" class="btn btn-lg btn-primary">
                Start Managing Inventories
            </a>
        </div>
</div>

@endsection
