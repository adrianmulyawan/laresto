<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Client::paginate(5);

        $title = 'Apakah Anda Yakin?';
        $text = 'Data yang telah dihapus tidak dapat dikembalikan';
        confirmDelete($title, $text);

        return view('pages.dashboard.Client.client', compact('items'));
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
                'client_name' => 'required',
                'image' => 'required|image|mimes:png,jpg,jpeg,svg,webp|max:1024'
            ]);

            $data = $request->all();
            $data['user_id'] = Auth::user()->id;
            $data['image'] = $request->file('image')->store('clients', 'public');

            Client::create($data);

            Alert::success('Hore', 'Data berhasil ditambahkan!');
            return back();
        } catch (\Throwable $th) {
            //throw $th;
            Alert::error('Error', 'Periksa kembali form anda!');
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
            $data = Client::find($id);

            if (!$data) {
                Alert::error('Error', 'Data tidak ditemukan!');
                return back();
            }

            return view('pages.dashboard.Client.edit-client', compact('data'));
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
        $client = Client::findOrFail($id);

        $request->validate([
            'client_name' => 'required'
        ]);

        $data = $request->all();
        $data['user_id'] = Auth::user()->id;

        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'required|image|mimes:png,jpg,jpeg,svg,webp|max:1024'
            ]);

            Storage::disk('public')->delete($client->image);

            $data['image'] = $request->file('image')->store('clients', 'public');
        }

        $client->update($data);

        Alert::success('Hore', 'Data berhasil diupdate!');
        return redirect()->route('client');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Client::findOrFail($id);

        $data->delete();
        Storage::disk('public')->delete($data->image);

        Alert::success('Hore', 'Data berhasil dihapus!');
        return back();
    }
}
