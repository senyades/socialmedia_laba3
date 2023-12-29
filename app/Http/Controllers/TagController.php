<?php
namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function create()
    {
        $tags = Tag::all();

        return view('tags.create', ['tags' => $tags]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:tags|max:255',
        ]);

        Tag::create([
            'name' => $request->input('name'),
        ]);

        return redirect()->route('tags.create')->with('success', 'Тег успешно добавлен.');
    }
}