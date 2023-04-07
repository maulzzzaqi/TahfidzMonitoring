@extends('layouts.app')
@section('main')
<div class="flex justify-end justify-items-center my-6 mx-10">
  <span class="text-xl font-medium mr-5">{{ $data->total() }} Student Tahfidz Data</span>
  @if (Auth::user()->role == 'admin')
  <button class="btn btn-sm btn-info text-white"><a href="{{ url('tahfidz/create') }}">Add</a></button>
  @endif
</div>
<div class="overflow-x-auto mx-10 drop-shadow-xl rounded-lg">
    <table class="table table-compact w-full">
        <thead>
            <tr>
                <th>Name</th>
                <th>Class</th>
                <th>Surah</th>
                <th>Tester</th>
                <th>Criteria</th>
                @if (Auth::user()->role == 'admin')
                <th></th>
                @endif
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->class }}</td>
                <td>{{ $item->surah }}</td>
                <td>{{ $item->tester }}</td>
                <td>{{ $item->status }}</td>
                @if (Auth::user()->role == 'admin')
                <td>
                  <form action="{{ url("/tahfidz/$item->id") }}" method="POST">
                    @csrf
                    @method('DELETE')
                      <a href="{{ url("tahfidz/$item->id/edit") }}" class="btn btn-outline btn-warning text-white">Edit</a>
                      <button type="submit" class="btn btn-outline btn-error text-white">Delete</button>
                  </form>
              </td>
                @endif
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $data->links() }}
</div>
@endsection
