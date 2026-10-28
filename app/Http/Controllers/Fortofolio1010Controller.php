<?php

namespace App\Http\Controllers;

use App\Models\Fortofolio1010;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Fortofolio1010Controller extends Controller
{
    public function index()
    {
        $portofolios = Fortofolio1010::latest()->get();
        return view('portofolio.index', compact('portofolios'));
    }

    public function create()
    {
        return view('portofolio.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'link' => 'nullable|url',
        ]);

        $data = $request->only(['judul', 'deskripsi', 'link']);

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('portofolio', 'public');
        }

        Fortofolio1010::create($data);

        return redirect()->route('fortofolio.index')->with('success', 'Portofolio berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $item = Fortofolio1010::findOrFail($id);
        return view('portofolio.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = Fortofolio1010::findOrFail($id);

        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'link' => 'nullable|url',
        ]);

        $data = $request->only(['judul', 'deskripsi', 'link']);

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($item->gambar && Storage::disk('public')->exists($item->gambar)) {
                Storage::disk('public')->delete($item->gambar);
            }
            $data['gambar'] = $request->file('gambar')->store('portofolio', 'public');
        }

        $item->update($data);

        return redirect()->route('fortofolio.index')->with('success', 'Portofolio berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $item = Fortofolio1010::findOrFail($id);

        if ($item->gambar && Storage::disk('public')->exists($item->gambar)) {
            Storage::disk('public')->delete($item->gambar);
        }

        $item->delete();

        return redirect()->route('fortofolio.index')->with('success', 'Portofolio berhasil dihapus!');
    }
}