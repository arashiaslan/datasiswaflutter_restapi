<?php

namespace App\Http\Controllers\Api;

use App\Models\Mahasiswa;
use App\Http\Controllers\Controller;
use App\Http\Resources\MahasiswaResource;
use App\Http\Requests\StoreMahasiswaRequest;
use App\Http\Requests\UpdateMahasiswaRequest;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return MahasiswaResource::collection(Mahasiswa::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMahasiswaRequest $request)
    {
        $data = Mahasiswa::create($request->validated());
        return MahasiswaResource::make($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(Mahasiswa $mahasiswa)
    {
        return MahasiswaResource::make($mahasiswa);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMahasiswaRequest $request, Mahasiswa $mahasiswa)
    {
        $mahasiswa->update($request->validated());
        return MahasiswaResource::make($mahasiswa);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();
        return response()->json([
            'message' => 'Berhasil Menghapus'
        ]);
    }
}
