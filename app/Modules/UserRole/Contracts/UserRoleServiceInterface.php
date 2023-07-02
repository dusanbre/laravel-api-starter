<?php

namespace App\Modules\UserRole\Contracts;

use App\Modules\UserRole\DataTransferObjects\UserRoleDto;
use App\Modules\UserRole\Models\UserRole;
use Illuminate\Database\Eloquent\Model;

interface UserRoleServiceInterface
{
    public function store(UserRoleDto $userRoleDto): UserRole|Model;
}