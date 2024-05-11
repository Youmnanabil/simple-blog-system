<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $post = Post::get();
        return view('posts.postTable', compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $post = Post::get();
        return view('posts.createPost')->with('post');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $message = $this->messages();
        $data = $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
        ], $message);
        Post::create($data);
        return redirect('postTable');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::findOrFail($id);
        return view('posts.showPost', compact('post'));
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

    public function messages(){
        return [
            'title.required'=>'this field is required ',
            'content.required'=> 'should be text',
            'title.string'=>'Should be string',
            ];
    }
}
