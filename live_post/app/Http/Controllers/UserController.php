<?php

namespace App\Http\Controllers;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\StorepostRequest;
use App\Http\Requests\UpdatepostRequest;
use App\Models\post;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return new JsonResponse([
            'data' => "something",
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    { 
        //
        return new JsonResponse([
            "data" => "store",
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(post $post)
    {
        //
        return new JsonResponse([
            'data' => "show",
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update( post $post)
    {
        return new JsonResponse([
            'data' => "update",
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(post $post)
    {

        return new JsonResponse([
            'data' => "destroy",
        ]);
        //
    }
}
