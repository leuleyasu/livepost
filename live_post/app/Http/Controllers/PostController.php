<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\StorepostRequest;
use App\Http\Requests\UpdatepostRequest;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Example logic for fetching all posts (you can adjust based on your needs)
        $posts = Post::all();

        return new JsonResponse([
            'data' => $posts,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorepostRequest $request)
    {
        // Logic for storing a new post
        // $post = Post::create($request->validated());

        return new JsonResponse([
            'data' => '',
            'message' => 'Post stored successfully',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        // Return a specific post
        return new JsonResponse([
            'data' => $post,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatepostRequest $request, Post $post)
    {
        // Logic for updating the post
        $post->update($request->validated());

        return new JsonResponse([
            'data' => $post,
            'message' => 'Post updated successfully',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        // Logic for deleting the post
        $post->delete();

        return new JsonResponse([
            'message' => 'Post deleted successfully',
        ]);
    }
}

?>