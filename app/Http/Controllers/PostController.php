<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $posts = Post::orderBy('id')->paginate(5);
    return view('posts.index', ['posts' => $posts]);
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    $this->authorize('create', Post::class);
    return view('posts.create');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {

    $validated = $request->validate([
      'title' => 'required|max:100',
      'body' => 'required|max:1000'
    ]);

    $post = new Post;
    $post->title = $request['title'];
    $post->body = $request['body'];
    $post->user()->associate(Auth::user());

    $post->save();
    return redirect()->route('posts.index')->with(['success' => 'Your Post added successfully']);


  }

  /**
   * Display the specified resource.
   */
  public function show(Post $post)
  {
    return view('posts.show', compact('post'));
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Post $post)
  {
    $this->authorize('update', $post);
    //auth()->user()->cannot('update', $post);
    return view('posts.edit', compact('post'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, $id)
  {
    $post = Post::find($id);
    $post->title = $request->input('title');
    $post->body = $request->input('body');
    $post->save();
    return redirect()->route('posts.index')
      ->with('Success', 'Post updated successfully.');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    $this->authorize('delete', Post::class);
    Post::where('id', $id)
    ->delete();
    return redirect()->back();
  }
}