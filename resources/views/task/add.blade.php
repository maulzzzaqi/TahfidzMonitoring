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
            <form action="{{ url('/tahfidz') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Name</label>
                    <input name="name" type="text" class="form-control" value="{{ old('name') }}">
                    @error('name')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Class</label>
                    <textarea name="class" class="form-control" id="" rows="3">{{ old('class') }}</textarea>
                    @error('class')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Surah</label>
                    <textarea name="surah" class="form-control" id="" rows="3">{{ old('surah') }}</textarea>
                    @error('surah')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Tester</label>
                    <textarea name="tester" class="form-control" id="" rows="3">{{ old('tester') }}</textarea>
                    @error('tester')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Status</label>
                    <textarea name="status" class="form-control" id="" rows="3">{{ old('status') }}</textarea>
                    @error('status')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
    </div>
</div>
@endsection