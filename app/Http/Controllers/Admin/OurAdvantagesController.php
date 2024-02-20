<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Advantage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class OurAdvantagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Advantage::paginate(5);

        $title = 'Apakah Anda Yakin?';
        $text = 'Data yang dihapus tidak akan bisa dikembalikan';
        confirmDelete($title, $text);

        return view('pages.dashboard.Advantages.advantage', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.dashboard.Advantages.add-advantage');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|min:3',
                'image' => 'required|mimes:png,jpg,jpeg,svg,webp|image|max:1024'
            ]);

            $data = $request->all();
            $data['user_id'] = Auth::user()->id;
            $data['image'] = $request->file('image')->store('advantage', 'public');

            Advantage::create($data);

            Alert::success('Hore', 'Berhasil Menambahkan Data!');
            return redirect()->route('advantage');
        } catch (\Throwable $th) {
            Alert::error('Error', 'Terjadi Kesalahan Saat Menambahkan Data!');
            return back();
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        try {
            $data = Advantage::find($id);

            if (!$data) {
                Alert::error('Error', 'Data Tidak Ditemukan!');
                return back();
            }

            return view('pages.dashboard.Advantages.edit-advantage', compact('data'));
        } catch (\Throwable $th) {
            //throw $th;
            Alert::error('Error', 'Data Tidak Ditemukan!');
            return back();
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $advantage = Advantage::findOrFail($id);

            $request->validate([
                'name' => 'required|min:3',
                // 'image' => 'required|mimes:png,jpg,jpeg,svg,webp|image|max:1024'
            ]);

            $data = $request->all();
            $data['user_id'] = Auth::user()->id;

            // Bila user update photo
            if ($request->hasFile('image')) {
                $request->validate([
                    'image' => 'required|mimes:png,jpg,svg,jpeg,webp|image|max:1024'
                ]);

                // Hapus gambar lama
                Storage::disk('public')->delete($advantage->image);

                // upload gambar baru
                $data['image'] = $request->file('image')->store('advantage', 'public');
            }

            $advantage->update($data);

            Alert::success('Hore', 'Data Berhasil Diupdate!');
            return redirect()->route('advantage');
        } catch (\Throwable $th) {
            //throw $th;
            Alert::error('Error', 'Terjadi Kesalahan Saat Mengupdate Data!');
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $data = Advantage::findOrFail($id);

            if (!$data) {
                Alert::error('Error', 'Data tidak ditemukan!');
            }

            $data->delete();
            Storage::disk('public')->delete($data->image);

            Alert::success('Hore', 'Data berhasil dihapus!');
            return back();
        } catch (\Throwable $th) {
            //throw $th;
            Alert::error('Error', 'Terjadi kesalahan saat menghapus data!');
            return back();
        }
    }
}
