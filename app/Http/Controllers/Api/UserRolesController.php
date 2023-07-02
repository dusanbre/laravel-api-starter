<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Modules\UserRole\Filters\UserRoleFilter;
use App\Modules\UserRole\Models\UserRole;
use App\Modules\UserRole\Resources\UserRoleResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class UserRolesController extends Controller
{
    public function index(Request $request, UserRoleFilter $filter): AnonymousResourceCollection
    {
        $roles = UserRole::filter($filter)->paginateUnderCondition($request);

        return UserRoleResource::collection($roles);
    }
}