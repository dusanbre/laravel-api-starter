<?php

namespace App\Modules\UserRole\Resources;

use App\Models\User;
use App\Modules\ApiResource;
use Illuminate\Http\Request;

/**
 * @property-read int $id
 * @property-read string $name
 * @property-read string $slug
 * @property-read User|null $user
 */
class UserRoleResource extends ApiResource
{
    public function data(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'slug' => $this->slug,
            'user' => $this->whenLoaded('user'),
        ];
    }
}