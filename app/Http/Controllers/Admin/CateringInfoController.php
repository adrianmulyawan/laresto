<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Organization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class CateringInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Organization::first();
        return view('pages.dashboard.CateringInfo.catering-info', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.dashboard.CateringInfo.add-catering-info');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|min:3',
                'email' => 'required|email',
                'phone_number' => 'required|min:10',
                'address' => 'required',
                'history_info' => 'required',
                'description_info' => 'required',
                'logo' => 'required|image|mimes:png,jpg,svg,jpeg,webp|max:1024'
            ]);

            $imagePath = $request->file('logo')->store('organization_logo', 'public');

            Organization::create([
                'user_id' => Auth::user()->id,
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'phone_number' => $request->input('phone_number'),
                'address' => $request->input('address'),
                'history_info' => $request->input('history_info'),
                'description_info' => $request->input('description_info'),
                'logo' => $imagePath
            ]);

            // dd(Alert::success('Hore', 'Info Catering Berhasil Ditambahkan!'));
            Alert::success('Hore', 'Informasi Catering Berhasil Ditambahkan!');
            return redirect()->route('catering-info');
        } catch (\Throwable $th) {
            Alert::error('Error', 'Terjadi Kesalahan Saat Menambahkan Data!');
            return back();
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Organization::find($id);

        if (!$data) {
            Alert::error('Error', 'Data Tidak Ditemukan!');
            return redirect()->back();
        } else {
            return view('pages.dashboard.CateringInfo.edit-catering-info', compact('data'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $organization = Organization::findOrFail($id);

            $request->validate([
                'name' => 'required|min:3',
                'email' => 'required|email',
                'phone_number' => 'required|min:10',
                'address' => 'required',
                'history_info' => 'required',
                'description_info' => 'required'
            ]);

            $data = $request->all();
            $data['user_id'] = Auth::user()->id;

            if ($request->hasFile('logo')) {
                $request->validate([
                    'logo' => 'required|image|mimes:png,jpg,svg,jpeg,webp|max:1024'
                ]);

                Storage::disk('public')->delete($organization->logo);

                $imagePath = $request->file('logo')->store('organization_logo', 'public');
                $data['logo'] = $imagePath;
            }

            $organization->update($data);

            Alert::success('Hore', 'Informasi Catering Berhasil Diupdate!');
            return redirect()->route('catering-info');
        } catch (\Throwable $th) {
            dd($th);
            Alert::error('Error', 'Terjadi Kesalahan Saat Mengupdate Data!');
            return back();
        }
    }
}
