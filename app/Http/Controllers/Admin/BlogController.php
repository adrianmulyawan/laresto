<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Blog::with(['user'])->orderBy('created_at', 'DESC')->paginate(5);

        $title = 'Apakah Anda Yakin?';
        $text = 'Data yang telah dihapus tidak dapat dikembalikan';
        confirmDelete($title, $text);

        return view('pages.dashboard.Blog.blog', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.dashboard.Blog.add-blog');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:3',
            'image_header' => 'required|image|mimes:png,jpg,jpeg,webp|max:1024',
            'image_blog' => 'required|image|mimes:png,jpg,jpeg,webp|max:1024',
            'body' => 'required|min:3'
        ]);

        $data = $request->all();
        $data['user_id'] = Auth::user()->id;
        $data['slug'] = Str::slug($request->input('title'));
        $data['image_header'] = $request->file('image_header')->store('blog_header', 'public');
        $data['image_blog'] = $request->file('image_blog')->store('blog_image', 'public');

        Blog::create($data);

        Alert::success('Hore', 'Data berhasil ditambahkan!');
        return redirect()->route('blog-dashboard');
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
            $data = Blog::find($id);

            if (!$data) {
                Alert::error('Error', 'Data tidak ditemukan!');
                return back();
            }

            return view('pages.dashboard.Blog.edit-blog', compact('data'));
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
        $blog = Blog::findOrFail($id);

        $request->validate([
            'title' => 'required|min:3',
            'body' => 'required|min:3'
        ]);

        $data = $request->all();
        $data['user_id'] = Auth::user()->id;
        $data['slug'] = Str::slug($request->input('title'));

        if ($request->hasFile('image_header')) {
            $request->validate([
                'image_header' => 'required|image|mimes:png,jpg,jpeg,webp|max:1024',
            ]);

            Storage::disk('public')->delete($blog->image_header);

            $data['image_header'] = $request->file('image_header')->store('blog_header', 'public');
        }

        if ($request->hasFile('image_blog')) {
            $request->validate([
                'image_blog' => 'required|image|mimes:png,jpg,jpeg,webp|max:1024',
            ]);

            Storage::disk('public')->delete($blog->image_blog);

            $data['image_blog'] = $request->file('image_blog')->store('blog_image', 'public');
        }

        $blog->update($data);

        Alert::success('Hore', 'Data berhasil diupdate!');
        return redirect()->route('blog-dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);

        $blog->delete();
        Storage::disk('public')->delete($blog->image_header);
        Storage::disk('public')->delete($blog->image_blog);

        Alert::success('Hore', 'Data berhasil dihapus!');
        return back();
    }
}
