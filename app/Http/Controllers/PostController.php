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
        $post = Post::findOrFail($id);
        return view('posts.editPost', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $message = $this->messages();
        $data = $request->validate([
            'title' => 'sometimes|string',
            'content' => 'sometimes|string',
        ], $message);

        Post::where('id', $id)->update($data);
        return redirect('postTable');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Post::where('id', $id)->delete();
        return redirect('postTable');
    }

    /**
     * show trashed Posts list
     */
    public function trashed()
     {
        $post=Post::onlyTrashed()->get();
        return view ('posts.trashedPosts', compact('post'));

     }
     /**
      * delete trashed posts
      */

      public function forcedelete( string $id)
      {
        Post::where('id', $id)->forceDelete();
        return redirect('postTable');
      }

      /**
       * retore trashed posts
       */
      public function restore(string $id)
      {
        Post::where('id', $id)->restore();
        return redirect('postTable');
      }
      
    public function messages(){
        return [
            'title.required'=>'this field is required ',
            'content.required'=> 'should be text',
            'title.string'=>'Should be string',
            ];
    }
}
