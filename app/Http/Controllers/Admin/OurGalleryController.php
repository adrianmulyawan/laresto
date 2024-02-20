<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class OurGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Gallery::paginate(5);

        $title = 'Apakah Anda Yakin?';
        $text = 'Data yang telah dihapus tidak dapat dikembalikan';
        confirmDelete($title, $text);

        return view('pages.dashboard.Gallery.gallery', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.dashboard.Gallery.add-gallery');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:png,jpg,jpeg,svg,webp|max:2048',
            'name' => 'required'
        ]);

        $data = $request->all();
        $data['user_id'] = Auth::user()->id;
        $data['image'] = $request->file('image')->store('gallery', 'public');

        Gallery::create($data);

        Alert::success('Hore', 'Data berhasil ditambahkan!');
        return redirect()->route('gallery');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        try {
            $data = Gallery::find($id);

            if (!$data) {
                Alert::error('Error', 'Data tidak ditemukan!');
                return back();
            }

            return view('pages.dashboard.Gallery.edit-gallery', compact('data'));
        } catch (\Throwable $th) {
            //throw $th;
            Alert::error('Error', 'Terjadi kesalahan saat menampilkan data!');
            return back();
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $gallery = Gallery::findOrFail($id);

            $request->validate([
                'name' => 'required'
            ]);

            $data = $request->all();
            $data['user_id'] = Auth::user()->id;

            if ($request->hasFile('image')) {
                $request->validate([
                    'image' => 'required|image|mimes:png,jpg,jpeg,webp,svg|max:2048'
                ]);

                Storage::disk('public')->delete($gallery->image);

                $data['image'] = $request->file('image')->store('gallery', 'public');
            }

            $gallery->update($data);

            Alert::success('Success', 'Data berhasil diupdate!');

            return redirect()->route('gallery');
        } catch (\Throwable $th) {
            //throw $th;
            Alert::error('Error', 'Terjadi kesalahan saat menampilkan data!');
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $gallery = Gallery::findOrFail($id);

            $gallery->delete();
            Storage::disk('public')->delete($gallery->image);

            Alert::success('Hore', 'Data berhasil dihapus');
            return back();
        } catch (\Throwable $th) {
            //throw $th;
            Alert::error('Error', 'Terjadi kesalahan saat menghapus data!');
            return back();
        }
    }
}
