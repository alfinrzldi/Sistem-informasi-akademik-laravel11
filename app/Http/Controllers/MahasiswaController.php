<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = ['nama' => 'hitler', 'foto' => 'opp.jpeg'];
        $mahasiswa = Mahasiswa::get();
        return view('mahasiswa.index', compact(['data', 'mahasiswa']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $data = ['nama' => 'hitler', 'foto' => 'opp.jpeg'];
        $prodi = Prodi::all();
        return view('mahasiswa.create', compact(['data', 'prodi']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validateData = $request->validate(
            [
                'nim' => 'required|unique:mahasiswa|max:255',
                'nama' => '',
                'prodi_id' => '',
                'no_hp' => '',
                'alamat' => '',
            ],
            [
                'nim.required' => 'Nim Harus diisi',
                'nim.unique' => 'Nim sudah ada',
                'nim.max' => 'Nim maksimal 255 karakter',
            ]
            );
            $validateData['foto'] = $validateData['nim'] . '.jpg';
            $validateData['password'] = Hash::make($validateData['nim']);
            Mahasiswa::create($validateData);
            return redirect ('/mahasiswa');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
{
    $data = ['nama' => 'hitler', 'foto' => 'opp.jpeg'];
    $mahasiswa = Mahasiswa::where('nim', $id)->first(); // Adjust if the primary key is 'nim'
    $prodi = Prodi::all();
    return view('mahasiswa.edit', compact(['data', 'mahasiswa', 'prodi']));
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $validateData = $request->validate(
            [
                'nim' => 'required|max:255',
                'nama' => '',
                'prodi_id' => '',
                'no_hp' => '',
                'alamat' => '',
            ],
            [
                'nim.required' => 'Nim Harus diisi',
                'nim.unique' => 'Nim sudah ada',
                'nim.max' => 'Nim maksimal 255 karakter',
            ]
            );
            $validateData['foto'] = $validateData['nim'] . '.jpg';
            $validateData['password'] = Hash::make($validateData['nim']);
            Mahasiswa::where('nim', $id)->update($validateData);
            return redirect ('/mahasiswa');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Use the correct primary key column name
        Mahasiswa::where('nim', $id)->delete();
        return redirect('/mahasiswa');
    }
}
