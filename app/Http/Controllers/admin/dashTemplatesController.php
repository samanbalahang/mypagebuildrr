<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Templates;
use Illuminate\Http\Request;


class dashTemplatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("dashboard.Templats.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("dashboard.Templats.add");
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
     * @param  \App\Models\admin\Templates  $templates
     * @return \Illuminate\Http\Response
     */
    public function show(Templates $templates)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\admin\Templates  $templates
     * @return \Illuminate\Http\Response
     */
    public function edit(Templates $templates)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\admin\Templates  $templates
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Templates $templates)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\admin\Templates  $templates
     * @return \Illuminate\Http\Response
     */
    public function destroy(Templates $templates)
    {
        //
    }
    public function fonts(){
        $files = File::allFiles(public_path()); 
    }
}
