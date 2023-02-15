@extends('layouts.app')
@section('main')
<div class="border rounded mt-5 mx-auto d-flex flex-column align-items-stretch bg-white" style="width: 380px;">
    <div class="d-flex justify-content-between flex-shrink-0 p-3 link-dark  border-bottom">
        {{-- <span class="fs-5 fw-semibold">Task Lists: {{ $data->total() }}</span> --}}
        <a href="" class="btn btn-sm btn-primary">add</a>
    </div>
    <div class="list-group list-group-flush border-bottom scrollarea">
        <div class="list-group-item list-group-item-action py-3 lh-tight" aria-current="true">
            <div class="d-flex w-100 align-items-center justify-content-between">
                <strong class="mb-1"></strong>
                <small></small>
            </div>
            <div class="col-10 mb-1 small"></div>
            <div class="group-action">
                <form action=""" method="POST">

                    <a href="" class="badge bg-info text-white">edit</a>
                    <button type="submit" class="badge bg-danger text-white">delete</button>
                </form>
            </div>
        </div>
    </div>
    <br>
</div>
@endsection