<?php

namespace App\Http\Controllers;

use App\Models\Mempelai;
use Illuminate\Http\Request;

class PemesananController extends Controller
{
    public function index()
    {
        return view('');
    }

    public function create()
    {
        return view('pemesanan.mempelai');
    }

    public function store(Request $request)
    {
        Mempelai::create($request->all());
        return redirect()->route('mempelai.create')->with('success', 'User berhasil ditambahkan.');
    }

    public function edit($id)
    {
        return view('pemesanan.mempelai', [
            'mempelai' => Mempelai::where('id', $id)->first(),
        ]);
    }

    public function update(Request $request, $id)
    {
        $users = Mempelai::findOrFail($id);

        $users->update([
            'nama'        => $request->nama,
            'email'       => $request->email,
            'password'    => Hash::make($request->password),
            'role'        => $request->role,
        ]);

        return redirect()->route('admin.index')->with('success', 'User berhasil diupdate.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}
