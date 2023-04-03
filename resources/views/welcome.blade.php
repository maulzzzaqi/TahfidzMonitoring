@extends('layouts.app')
@section('main')
<div class="border rounded mt-5 mx-auto d-flex flex-column align-items-stretch bg-white" style="width: 500px;">
    <div class="d-flex justify-content-between flex-shrink-0 p-3 link-dark border-bottom">
        @if (Auth::user())
        <span class="fs-5 text-center fw-semibold">Welcome to Task Management, {{ Auth::user()->name }}!</span>
        <span class="btn btn-sm btn-primary">Add</span>
        @else
        <span class="fs-5 text-center fw-semibold">Welcome to Task Management!</span>
        @endif
    </div>
</div>
@endsection