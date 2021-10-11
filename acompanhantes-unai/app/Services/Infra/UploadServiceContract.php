<?php

namespace App\Services\Infra;

interface UploadServiceContract
{
    public function upload($file, $directory): string;
}
