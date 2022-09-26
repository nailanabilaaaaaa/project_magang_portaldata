<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index() 
    {
        return view("mahasiswa");
    }
    public function store(Request $request)
    {
        $request->validate([
            'addMoreInputFields.*.nim' => 'required',
            'addMoreInputFields.*.nama' => 'required',
            'addMoreInputFields.*.prodi' => 'required',
            'addMoreInputFields.*.jurusan' => 'required'
        ]);
     
        foreach ($request->addMoreInputFields as $key => $value) {
            Mahasiswa::create($value);
        }
     
        return back()->with('success', 'New Mahasiswa has been added.');
    } 
}
