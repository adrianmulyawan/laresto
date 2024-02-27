<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class QuestionController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'contact' => 'required|min:10',
            'message' => 'required|min:3'
        ]);

        $data = $request->all();

        Question::create($data);

        Alert::success('Hore', 'Pertanyaan Anda Berhasil Kami Terima!');
        return back();
    }
}
