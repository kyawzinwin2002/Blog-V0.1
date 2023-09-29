<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBloggerRequest;
use App\Http\Requests\UpdateBloggerRequest;
use App\Models\Blogger;

class BloggerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBloggerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Blogger $blogger)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blogger $blogger)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBloggerRequest $request, Blogger $blogger)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blogger $blogger)
    {
        //
    }
}
