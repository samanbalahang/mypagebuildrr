<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Tages;
use Illuminate\Http\Request;

class dashTagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view("dashboard.tages.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("dashboard.tages.index");
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
     * @param  \App\Models\Tages  $tages
     * @return \Illuminate\Http\Response
     */
    public function show(Tages $tages)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tages  $tages
     * @return \Illuminate\Http\Response
     */
    public function edit(Tages $tages)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tages  $tages
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tages $tages)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tages  $tages
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tages $tages)
    {
        //
    }
}
