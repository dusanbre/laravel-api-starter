<?php

namespace App\Modules;

use Illuminate\Http\Resources\Json\ResourceResponse;
use Illuminate\Support\Collection;

class ApiResourceResponse extends ResourceResponse
{

    protected function wrap($data, $with = [], $additionalData = []): array
    {
        return array_merge_recursive($data, $with, $additionalData);
    }
}