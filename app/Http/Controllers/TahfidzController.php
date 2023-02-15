<?php

namespace App\Http\Controllers;

use App\Models\Tahfidz;
use Illuminate\Http\Request;

class TahfidzController extends Controller
{
    public function index(Request $request) {
        if ($request -> search){
            $tahfidz = Tahfidz::where('name', 'LIKE', "%$request->search%")->get();
            return $tahfidz;
        }

        $tahfidz = Tahfidz::all();
        return view('task.index', [
            'data' => $tahfidz
        ]);
    }
}
