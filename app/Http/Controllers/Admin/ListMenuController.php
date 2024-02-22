<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class ListMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Menu::with(['category'])->paginate(5);

        $title = 'Apakah Anda Yakin?';
        $text = 'Data yang telah dihapus tidak dapat dikembalikan';
        confirmDelete($title, $text);

        return view('pages.dashboard.Menu.menu', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('pages.dashboard.Menu.add-menu', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required',
            'name' => 'required|min:3',
            'image' => 'required|image|mimes:png,jpg,jpeg,svg,webp|max:1024',
            'price' => 'required',
            'minimal_order' => 'required',
            'description' => 'required'
        ]);

        $data = $request->all();
        $data['user_id'] = Auth::user()->id;
        $data['slug'] = Str::slug($request->input('name'));
        $data['image'] = $request->file('image')->store('menus', 'public');

        Menu::create($data);

        Alert::success('Hore', 'Data berhasil ditambahkan!');
        return redirect()->route('menu-catering');
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
            $data = Menu::with(['category'])->find($id);

            $categories = Category::all();

            if (!$data) {
                Alert::error('Error', 'Data tidak ditemukan!');
                return back();
            }

            return view('pages.dashboard.Menu.edit-menu', compact('data', 'categories'));
        } catch (\Throwable $th) {
            //throw $th;
            Alert::error('Error', 'Terjadi Kesalahan Saat Menampilkan Data!');
            return back();
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $menu = Menu::findOrFail($id);

        $request->validate([
            // 'category_id' => 'required',
            'name' => 'required|min:3',
            'price' => 'required',
            'minimal_order' => 'required',
            'description' => 'required'
        ]);

        $data = $request->all();
        $data['user_id'] = Auth::user()->id;
        $data['slug'] = Str::slug($request->input('name'));

        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'required|image|mimes:png,jpg,jpeg,svg,webp|max:1024'
            ]);

            Storage::disk('public')->delete($menu->image);

            $data['image'] = $request->file('image')->store('menus', 'public');
        }

        $menu->update($data);

        Alert::success('Hore', 'Data berhasil diubah!');
        return redirect()->route('menu-catering');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $data = Menu::findOrFail($id);

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
