<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('movies.index', compact('movies'));
    }

    // Thêm phim
    public function create()
    {
        return view('movies.create');
    }

    // Sửa phim
    public function edit($id)
    {
    $movie = Movie::findOrFail($id);
    return view('movies.edit', compact('movie'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'video_url' => 'required',
            'category' => 'required',
            'release_year' => 'required|integer',
        ]);

        Movie::create($request->all());
        return redirect()->route('movies.index')->with('success', 'Phim đã được thêm thành công');
    }
}
