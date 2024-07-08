<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class ArtikelController extends Controller
{
    public function show()
    {
        $articles = DB::table('artikel')->orderby('id', 'desc')->get();
        return view('show', ['articles' => $articles]);
    }

    public function add()
    {
        return view('add');
    }

    public function add_process(Request $article)
    {
        DB::table('artikel')->insert([
            'judul' => $article->judul,
            'deskripsi' => $article->deskripsi
        ]);
    }
    public function detail($id)
    {
        $article = DB::table('artikel')->where('id', $id)->first();
        return view('detail', ['article' => $article]);
    }
}
