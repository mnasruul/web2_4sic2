<?php

namespace App\Http\Controllers;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index() {
        $tags = Tag::query()->paginate(5);
        return view('admin.tags.index',[
            'tags' => $tags,
        ]);
    }
}
