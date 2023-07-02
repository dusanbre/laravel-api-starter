<?php

namespace App\Modules\UserRole\Services;

use App\Modules\UserRole\Contracts\UserRoleServiceInterface;
use App\Modules\UserRole\DataTransferObjects\UserRoleDto;
use App\Modules\UserRole\Models\UserRole;
use Illuminate\Database\Eloquent\Model;

class UserRoleServices implements UserRoleServiceInterface
{

    public function store(UserRoleDto $userRoleDto): Model|UserRole
    {
        return UserRole::create(['name' => $userRoleDto->name, 'slug' => $userRoleDto->slug]);
    }
}