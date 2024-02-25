<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Question;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class UserQuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Question::orderBy('created_at', 'DESC')->paginate(10);
        return view('pages.dashboard.Question.question', compact('items'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try {
            $data = Question::find($id);

            if (!$data) {
                Alert::error('Error', 'Data tidak ditemukan!');
                return back();
            }

            return view('pages.dashboard.Question.show-question', compact('data'));
        } catch (\Throwable $th) {
            //throw $th;
            Alert::error('Error', 'Terjadi kesalahan saat menampilkan data!');
            return back();
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
