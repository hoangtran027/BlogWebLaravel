<?php

namespace App\Http\Controllers;

use App\Models\ApprovedPost;
use Illuminate\Http\Request;

class ApprovedPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        ApprovedPost::paginate(5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ApprovedPost  $approvedPost
     * @return \Illuminate\Http\Response
     */
    public function show(ApprovedPost $approvedPost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ApprovedPost  $approvedPost
     * @return \Illuminate\Http\Response
     */
    public function edit(ApprovedPost $approvedPost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ApprovedPost  $approvedPost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ApprovedPost $approvedPost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ApprovedPost  $approvedPost
     * @return \Illuminate\Http\Response
     */
    public function destroy(ApprovedPost $approvedPost)
    {
        //
    }
}
