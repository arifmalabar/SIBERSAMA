<?php

namespace App\Http\Controllers\guru;

use App\Http\Controllers\Controller;
use App\Http\Controllers\TemplateController;
use Illuminate\Http\Request;

class EntryPelanggaran extends Controller
{
    public function index()
    {
        return TemplateController::templateHandler("guru.entry_pelanggaran", array(), "Entry Pelanggaran");
    }
}
