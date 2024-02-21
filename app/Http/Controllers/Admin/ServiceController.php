<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Service::paginate(5);

        $title = 'Apakah Anda Yakin?';
        $text = 'Data yang telah dihapus tidak dapat dikembalikan';
        confirmDelete($title, $text);

        return view('pages.dashboard.Service.service', compact('items'));
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
        try {
            $request->validate([
                'name' => 'required|min:3',
                'icon' => 'required|image|mimes:png,jpg,jpeg,webp,svg|max:1024',
                'description' => 'required|min:10'
            ]);

            $data = $request->all();
            $data['user_id'] = Auth::user()->id;
            $data['icon'] = $request->file('icon')->store('services', 'public');

            Service::create($data);
            Alert::success('Hore', 'Data berhasil ditambahkan!');
            return back();
        } catch (\Throwable $th) {
            //throw $th;
            Alert::error('Error', 'Terjadi kesalahan saat menambahkan data!');
            return back();
        }
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
    public function edit($id)
    {
        try {
            $data = Service::find($id);

            if (!$data) {
                Alert::error('Error', 'Data tidak ditemukan!');
                return back();
            }

            return view('pages.dashboard.Service.edit-service', compact('data'));
        } catch (\Throwable $th) {
            Alert::error('Error', 'Terjadi kesalahan saat menampilkan data!');
            return back();
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $service = Service::findOrFail($id);

        $request->validate([
            'name' => 'required|min:3',
            'description' => 'required|min:10'
        ]);

        $data = $request->all();
        $data['user_id'] = Auth::user()->id;

        if ($request->hasFile('icon')) {
            $request->validate([
                'icon' => 'required|image|mimes:png,jpg,jpeg,svg,webp|max:1024'
            ]);

            Storage::disk('public')->delete($service->icon);

            $data['icon'] = $request->file('icon')->store('services', 'public');
        }

        $service->update($data);

        Alert::success('Hore', 'Data berhasil diupdate!');
        return redirect()->route('service');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $data = Service::findOrFail($id);

            $data->delete();
            Storage::disk('public')->delete($data->icon);

            Alert::Success('Hore', 'Data berhasil dihapus!');
            return back();
        } catch (\Throwable $th) {
            //throw $th;
            Alert::error('Error', 'Terjadi kesalahan saat menghapus data!');
            return back();
        }
    }
}
