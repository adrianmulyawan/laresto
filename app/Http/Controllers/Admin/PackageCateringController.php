<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class PackageCateringController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Package::paginate(5);

        $title = 'Apakah Anda Yakin?';
        $text = 'Data yang telah dihapus tidak dapat dikembalikan';
        confirmDelete($title, $text);

        return view('pages.dashboard.Package.package', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.dashboard.Package.add-package');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'price' => 'required',
            'image_header' => 'required|image|mimes:png,jpg,jpeg,svg,webp|max:2048',
            'image_package' => 'required|image|mimes:png,jpg,jpeg,svg,webp|max:2048',
            'description' => 'required|min:3',
            'simple_description' => 'required|min:3'
        ]);

        $data = $request->all();
        $data['user_id'] = Auth::user()->id;
        $data['slug'] = Str::slug($request->input('name'));
        $data['image_header'] = $request->file('image_header')->store('package_header_image', 'public');
        $data['image_package'] = $request->file('image_package')->store('image_package', 'public');

        Package::create($data);

        Alert::success('Hore', 'Data berhasil ditambahkan!');
        return redirect()->route('package-catering');
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
            $data = Package::find($id);

            if (!$data) {
                Alert::error('Error', 'Data tidak ditemukan!');
                return back();
            }

            return view('pages.dashboard.Package.edit-package', compact('data'));
        } catch (\Throwable $th) {
            //throw $th;
            Alert::error('Error', 'Terjadi kesalahan saat menampilkan data!');
            return back();
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $package = Package::findOrFail($id);

        $request->validate([
            'name' => 'required|min:3',
            'price' => 'required',
            'description' => 'required|min:3',
            'simple_description' => 'required|min:3'
        ]);

        $data = $request->all();
        $data['user_id'] = Auth::user()->id;
        $data['slug'] = Str::slug($request->input('name'));

        if ($request->hasFile('image_header')) {
            $request->validate([
                'image_header' => 'required|image|mimes:png,jpg,jpeg,svg,webp|max:2048'
            ]);

            Storage::disk('public')->delete($package->image_header);

            $data['image_header'] = $request->file('image_header')->store('package_header_image', 'public');
        }

        if ($request->hasFile('image_package')) {
            $request->validate([
                'image_package' => 'required|image|mimes:png,jpg,jpeg,svg,webp|max:2048',
            ]);

            Storage::disk('public')->delete($package->image_package);

            $data['image_package'] = $request->file('image_package')->store('image_package', 'public');
        }

        $package->update($data);

        Alert::success('Hore', 'Data berhasil diupdate!');
        return redirect()->route('package-catering');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $package = Package::findOrFail($id);

            $package->delete();

            Storage::disk('public')->delete($package->image_header);
            Storage::disk('public')->delete($package->image_package);

            Alert::success('Hore', 'Data berhasil dihapus!');
            return back();
        } catch (\Throwable $th) {
            Alert::error('Error', 'Terjadi kesalahan saat menghapus data!');
            return back();
        }
    }
}
