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
        <div class="card card-body bg-gray-100 drop-shadow-lg">
            <form action="{{ url('/tahfidz') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="" class="font-medium">Name</label>
                    <input name="name" type="text" class="input input-bordered w-full max-w-xs mt-2" value="{{ old('name') }}">
                    @error('name')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="font-medium">Class</label>
                    <textarea name="class" class="input input-bordered w-full max-w-xs mt-2" id="" rows="3">{{ old('class') }}</textarea>
                    @error('class')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="font-medium">Surah</label>
                    <textarea name="surah" class="input input-bordered w-full max-w-xs mt-2" id="" rows="3">{{ old('surah') }}</textarea>
                    @error('surah')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="font-medium">Tester</label>
                    <textarea name="tester" class="input input-bordered w-full max-w-xs mt-2" id="" rows="3">{{ old('tester') }}</textarea>
                    @error('tester')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="font-medium">Status</label>
                    <select class="select select-bordered w-full max-w-xs" id="grid-state" name="status">
                        <option>{{old('status')}}</option>
                        <option>Lancar</option>
                        <option>Tidak Lancar</option>
                    </select>                    
                    @error('status')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-outline btn-info">Add</button>
                <a href="{{ url('/tahfidz') }}" class="btn btn-outline btn-success">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection