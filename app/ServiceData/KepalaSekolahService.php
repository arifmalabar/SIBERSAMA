<?php

namespace App\ServiceData;
use App\Repos\GuruRepos;
use App\ServiceData\GuruService;

class KepalaSekolahService extends GuruService
{
    public function __construct($guru)
    {
        $this->role = 0;
        parent::__construct($guru);
    }
}
