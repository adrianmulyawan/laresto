<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Testimonial::paginate(5);

        $title = 'Apakah Anda Yakin?';
        $text = 'Data yang telah dihapus tidak dapat dikembalikan';
        confirmDelete($title, $text);

        return view('pages.dashboard.Testimonial.testimonial', compact('items'));
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
            //code...
            $request->validate([
                'name' => 'required',
                'work' => 'required',
                'testi' => 'required',
                'image' => 'required|image|mimes:png,jpg,jpeg,svg,webp|max:1024'
            ]);

            $data = $request->all();
            $data['user_id'] = Auth::user()->id;
            $data['image'] = $request->file('image')->store('testi', 'public');

            Testimonial::create($data);

            Alert::success('Hore', 'Data berhasil ditambahkan!');
            return back();
        } catch (\Throwable $th) {
            // dd($th);
            //throw $th;
            Alert::error('Error', 'Terjadi kesalahan, cek kembali form anda!');
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
            $data = Testimonial::find($id);

            if (!$data) {
                Alert::error('Error', 'Data tidak ditemukan!');
                return back();
            }

            return view('pages.dashboard.Testimonial.edit-testimonial', compact('data'));
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
        $testi = Testimonial::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'work' => 'required',
            'testi' => 'required'
        ]);

        $data = $request->all();
        $data['user_id'] = Auth::user()->id;

        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'required|image|mimes:png,jpg,jpeg,svg,webp|max:1024'
            ]);

            Storage::disk('public')->delete($testi->image);

            $data['image'] = $request->file('image')->store('testi', 'public');
        }

        $testi->update($data);

        Alert::success('Hore', 'Data berhasil diupdate!');
        return redirect()->route('testimonial');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $testi = Testimonial::findOrFail($id);

        $testi->delete();
        Storage::disk('public')->delete($testi->image);

        Alert::success('Hore', 'Data berhasil dihapus!');
        return back();
    }
}
