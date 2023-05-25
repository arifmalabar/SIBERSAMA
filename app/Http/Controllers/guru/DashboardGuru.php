<?php

namespace App\Http\Controllers\guru;

use App\Http\Controllers\Controller;
use App\Http\Controllers\TemplateController;
use App\Models\guru\Semester;
use Illuminate\Http\Request;
use App\ServiceData\SemesterService;

class DashboardGuru extends Controller
{
    private SemesterService $semesterService;

    public function __construct()
    {
        $model  = new Semester();
        $this->semesterService = new SemesterService($model);
    }

    public function index()
    {
        $data = array(
            "data_pangkat" => $this->semesterService->getDataSemester(),
        );
        return TemplateController::templateHandler("guru/main", $data, "Dashboard");
    }
}
