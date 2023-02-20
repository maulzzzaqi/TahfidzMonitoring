@extends('layouts.app')
@section('main')
<div class="mt-5 mx-auto" style="width: 380px">
    {{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif --}}
    <div class="card">
        <div class="card-body">
            <form action="{{ url("/tahfidz/$tahfidz->id") }}" method="POST">
                @csrf
                @method('PATCH')
                <div class="mb-3">
                    <label for="" class="form-label">Name</label>
                    <input name="name" type="text" class="form-control" value="{{ old('name') }} {{ $tahfidz->name }}">
                    @error('name')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Class</label>
                    <textarea name="class" class="form-control" id="" rows="3">{{ old('class') }} {{ $tahfidz->class }}</textarea>
                    @error('class')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Surah</label>
                    <textarea name="surah" class="form-control" id="" rows="3">{{ old('surah') }} {{ $tahfidz->surah }}</textarea>
                    @error('surah')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Tester</label>
                    <textarea name="tester" class="form-control" id="" rows="3">{{ old('tester') }} {{ $tahfidz->tester }}</textarea>
                    @error('tester')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Status</label>
                    <textarea name="status" class="form-control" id="" rows="3">{{ old('status') }} {{ $tahfidz->status }}</textarea>
                    @error('status')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
                <button type="update" class="btn btn-warning">Edit</button>
                <a href="{{ url('/tahfidz') }}" class="btn btn-primary">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection