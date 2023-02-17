<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class TahfidzController extends Controller
{
    public function index(Request $request) {
        if ($request -> search){
            $tahfidz = Student::where('name', 'LIKE', "%$request->search%")->get();
            return $tahfidz;
        }

        $tahfidz = Student::all();
        return view('task.index', [
            'data' => $tahfidz
        ]);
    }

    public function create() {
        return view('task.add');
    }
}
