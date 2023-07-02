<?php

namespace App\Modules;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

abstract class ApiResource extends JsonResource
{
    public function toResponse($request): JsonResponse
    {
        return (new ApiResourceResponse($this))->toResponse($request);
    }

    /**
     * @param  Request  $request
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        if (is_null($this->resource)) {
            return [];
        }

        return $this->data($request);
    }

    /**
     * @param  Request  $request
     * @return array<string, mixed>
     */
    abstract public function data(Request $request): array;
}