<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\TemplateController;
use App\Http\Requests\StoreKepalaSekolahRequest;
use App\Http\Requests\UpdateKepalaSekolahRequest;
use App\Models\admin\KepalaSekolah;

class KepalaSekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array(
            "data_kepsek" => "",
        );
        return TemplateController::templateHandler("admin/kepala_sekolah", $data, "Kepala Sekolah");
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
     * @param  \App\Http\Requests\StoreKepalaSekolahRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKepalaSekolahRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\admin\KepalaSekolah  $kepalaSekolah
     * @return \Illuminate\Http\Response
     */
    public function show(KepalaSekolah $kepalaSekolah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\admin\KepalaSekolah  $kepalaSekolah
     * @return \Illuminate\Http\Response
     */
    public function edit(KepalaSekolah $kepalaSekolah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKepalaSekolahRequest  $request
     * @param  \App\Models\admin\KepalaSekolah  $kepalaSekolah
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKepalaSekolahRequest $request, KepalaSekolah $kepalaSekolah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\admin\KepalaSekolah  $kepalaSekolah
     * @return \Illuminate\Http\Response
     */
    public function destroy(KepalaSekolah $kepalaSekolah)
    {
        //
    }
}
