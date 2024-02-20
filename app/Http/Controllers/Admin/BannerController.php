<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Banner::paginate(5);

        $title = 'Apakah Anda Yakin?';
        $text = 'Data yang telah dihapus tidak dapat dikembalikan';
        confirmDelete($title, $text);

        return view('pages.dashboard.Banner.banner', compact('items'));
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
    public function store(Request $request)
    {
        $request->validate([
            'banner_name' => 'required|min:3',
            'banner_image' => 'required|image|mimes:png,jpg,jpeg,svg,webp|max:2048'
        ]);

        $data = $request->all();
        $data['user_id'] = Auth::user()->id;
        $data['banner_image'] = $request->file('banner_image')->store('banner', 'public');

        Banner::create($data);

        Alert::success('Hore', 'Data berhasil ditambahkan!');
        return back();
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
        try {
            $data = Banner::find($id);

            if (!$data) {
                Alert::error('Error', 'Data tidak ditemukan!');
                return back();
            }

            return view('pages.dashboard.Banner.edit-banner', compact('data'));
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
            $banner = Banner::findOrFail($id);

            $request->validate([
                'banner_name' => 'required|min:3'
            ]);

            $data = $request->all();
            $data['user_id'] = Auth::user()->id;

            if ($request->hasFile('banner_image')) {
                $request->validate([
                    'banner_image' => 'required|image|mimes:png,jpg,jpeg,svg,webp|max:2048'
                ]);

                Storage::disk('public')->delete($banner->banner_image);

                $data['banner_image'] = $request->file('banner_image')->store('banner', 'public');
            }

            $banner->update($data);

            Alert::success('Hore', 'Data berhasil diupdate!');
            return redirect()->route('banner');
        } catch (\Throwable $th) {
            Alert::error('Error', 'Terjadi kesalahan saat mengupdate data!');
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $banner = Banner::findOrFail($id);

            Storage::disk('public')->delete($banner->banner_image);
            $banner->delete();

            Alert::success('Hore', 'Data berhasil dihapus!');
            return back();
        } catch (\Throwable $th) {
            Alert::error('Error', 'Terjadi kesalahan saat mengupdate data!');
            return back();
        }
    }
}
