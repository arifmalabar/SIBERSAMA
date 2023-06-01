<?php

namespace App\Http\Controllers\guru;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSemesterRequest;
use App\Http\Requests\UpdateSemesterRequest;
use App\Models\guru\Semester;
use App\ServiceData\SemesterService;
use Illuminate\Http\Request;

class SemesterController extends Controller
{
    private SemesterService $semesterService;

    /**
     * @param SemesterService $semesterService
     */
    public function __construct()
    {
        $model = new Semester();
        $this->semesterService = new SemesterService($model);
    }
    public function getDataSemester()
    {
        return $this->semesterService->getDataSemester();
    }
    public function store(StoreSemesterRequest $request)
    {
        $query = $this->semesterService->insertDataSemester($request);
        if ($query){
            return redirect('guru')->with('pesan', 'berhasil menambah data');
        }
    }
    public function update(UpdateSemesterRequest $request, $id)
    {
        $query = $this->semesterService->updateDataSemester($request, $id);
        if ($query){
            return redirect('guru')->with('pesan', 'berhasil mengubah data');
        }
    }
    public function destroy($id)
    {
        $query = $this->semesterService->deleteDataSemester($id);
        if ($query){
            return redirect('guru')->with('pesan', 'berhasil menghapus data');
        }
    }
}
