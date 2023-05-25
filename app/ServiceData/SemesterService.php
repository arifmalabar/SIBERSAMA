<?php

namespace App\ServiceData;
use App\Http\Requests\StoreSemesterRequest;
use App\Http\Requests\UpdateSemesterRequest;
use App\Repos\SemesterRepos;

class SemesterService
{
    private SemesterRepos $semesterRepos;

    public function __construct($model)
    {
        $this->semesterRepos = new SemesterRepos($model);
    }
    public function getDataSemester()
    {
        return $this->semesterRepos->getAllData();
    }
    public function insertDataSemester(StoreSemesterRequest $request)
    {
        $data = $request->validated();
        return $this->semesterRepos->simpanData($data);
    }
    public function updateDataSemester(UpdateSemesterRequest $request, $id)
    {
        $data = $request->validated();
        return $this->semesterRepos->updateData($data, $id);
    }
    public function deleteDataSemester($id)
    {
        return $this->semesterRepos->hapusData($id);
    }
}
