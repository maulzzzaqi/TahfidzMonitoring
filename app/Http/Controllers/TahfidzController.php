<?php

namespace App\Http\Controllers;

use App\Http\Requests\TahfidzRequest;
use App\Models\Student;
use Illuminate\Http\Request;

class TahfidzController extends Controller
{
    public function index(Request $request) {
        if ($request -> search){
            $tahfidz = Student::where('name', 'LIKE', "%$request->search%")->get();
            return $tahfidz;
        }

        $tahfidz = Student::paginate(5);
        return view('task.index', [
            'data' => $tahfidz
        ]);
    }

    public function create() {
        return view('task.add');
    }

    public function store(TahfidzRequest $request) {
        Student::create([
            'name' => $request->name,
            'class' => $request->class,
            'surah' => $request->surah,
            'tester' => $request->tester,
            'status' => $request->status
        ]);
        return redirect('/tahfidz');
    }

}
