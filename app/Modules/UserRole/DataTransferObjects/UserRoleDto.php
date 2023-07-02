<?php

namespace App\Modules\UserRole\DataTransferObjects;

use App\Http\Requests\UserRole\StoreUserRoleRequest;
use Illuminate\Http\Request;

readonly class UserRoleDto
{

    public function __construct(public string $name, public ?string $slug)
    {
    }

    public static function fromRequest(StoreUserRoleRequest $request): self
    {
        return new self(
            name: $request->validated('name'),
            slug: $request->validated('slug')
        );
    }
}