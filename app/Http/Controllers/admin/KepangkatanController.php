<?php

namespace App\Http\Controllers\admin;

use App\Models\admin\Kepangkatan;
use App\Http\Requests\StoreKepangkatanRequest;
use App\Http\Requests\UpdateKepangkatanRequest;
use App\Http\Controllers\Controller;

class KepangkatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array(
            'nama_file_view' => 'admin/pangkat',
            'data_pangkat' => Kepangkatan::all(),
            'no' => 1
        );
        return view('admin/pangkat', $data);
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
     * @param  \App\Http\Requests\StoreKepangkatanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKepangkatanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\admin\Kepangkatan  $kepangkatan
     * @return \Illuminate\Http\Response
     */
    public function show(Kepangkatan $kepangkatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\admin\Kepangkatan  $kepangkatan
     * @return \Illuminate\Http\Response
     */
    public function edit(Kepangkatan $kepangkatan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKepangkatanRequest  $request
     * @param  \App\Models\admin\Kepangkatan  $kepangkatan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKepangkatanRequest $request, Kepangkatan $kepangkatan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\admin\Kepangkatan  $kepangkatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kepangkatan $kepangkatan)
    {
        //
    }
}
