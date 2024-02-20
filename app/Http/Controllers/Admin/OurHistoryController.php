<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\History;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class OurHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = History::paginate(5);

        $title = 'Apakah Anda Yakin?';
        $text = 'Data yang telah dihapus tidak dapat dikembalikan';
        confirmDelete($title, $text);

        return view('pages.dashboard.History.history', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.dashboard.History.add-history');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'title' => 'required|min:3',
                'description' => 'required|min:3'
            ]);

            $data = $request->all();
            $data['user_id'] = Auth::user()->id;

            History::create($data);

            Alert::success('Hore', 'Berhasil Menambahkan Data!');
            return redirect()->route('history');
        } catch (\Throwable $th) {
            //throw $th;
            // dd($th);
            Alert::error('Error', 'Terjadi kesalahan, cek kembali inputan data anda!');
            return back();
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        try {
            $data = History::find($id);

            if (!$data) {
                Alert::error('Error', 'Data tidak ditemukan!');
                return back();
            }

            return view('pages.dashboard.History.edit-history', compact('data'));
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
        try {
            $history = History::findOrFail($id);

            $request->validate([
                'title' => 'required|min:3',
                'description' => 'required|min:3'
            ]);

            $data = $request->all();
            $data['user_id'] = Auth::user()->id;

            $history->update($data);

            Alert::success('Hore', 'Data berhasil diupdate!');
            return redirect()->route('history');
        } catch (\Throwable $th) {
            //throw $th;
            Alert::error('Error', 'Terjadi kesalahan saat mengupdate data!');
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $history = History::findOrFail($id);

            $history->delete();

            Alert::success('Hore', 'Data berhasil dihapus!');
            return back();
        } catch (\Throwable $th) {
            //throw $th;
            Alert::error('Error', 'Terjadi kesalahan saat menghapus data!');
            return back();
        }
    }
}
