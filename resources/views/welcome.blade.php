@extends('layouts.app')
@section('main')
<div class="flex justify-center mt-52">
    <div class="card w-2/6 bg-base-100 shadow-xl">
        <div class="card-body">
            @if (Auth::user())
            <h2 class="font-medium text-2xl text-center">Welcome to the TahfidzMonitoring, {{ Auth::user()->name }}!
            </h2>
            <p class="text-center">Start managing tahfidz now.</p>
            <center><a href="{{ url('/tahfidz') }}"><button class="btn btn-success mt-5 w-2/6 flex justify-center">Input Tahfidz</button></a></center>
            @else
            <h2 class="font-medium text-2xl text-center">Welcome to the TahfidzManagement!</h2>
            <p class="text-center"></p>
            <div class="flex justify-center">
                <a href="{{ url('/tahfidz') }}" class="btn btn-success mt-3 mx-3 w-2/6">See Tahfidz Data</a>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
