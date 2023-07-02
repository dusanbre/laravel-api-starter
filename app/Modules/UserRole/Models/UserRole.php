<?php

namespace App\Modules\UserRole\Models;

use App\Models\User;
use App\Modules\ApiModel;
use Database\Factories\UserRoleFactory;
use Envoo\LaravelApiTools\Traits\HasSlug;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * App\Modules\UserRole\Models\UserRole
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\UserRoleFactory factory($count = null, $state = [])
 * @method static \Envoo\LaravelApiTools\QueryBuilders\PaginationQueryBuilder|ApiModel filter(\Envoo\LaravelApiTools\Http\Filters\Filter $filter)
 * @method static \Envoo\LaravelApiTools\QueryBuilders\PaginationQueryBuilder|UserRole newModelQuery()
 * @method static \Envoo\LaravelApiTools\QueryBuilders\PaginationQueryBuilder|UserRole newQuery()
 * @method static \Envoo\LaravelApiTools\QueryBuilders\PaginationQueryBuilder|UserRole paginateAnyway(\Illuminate\Http\Request $request)
 * @method static \Envoo\LaravelApiTools\QueryBuilders\PaginationQueryBuilder|UserRole paginateUnderCondition(\Illuminate\Http\Request $request)
 * @method static \Envoo\LaravelApiTools\QueryBuilders\PaginationQueryBuilder|UserRole query()
 * @method static \Envoo\LaravelApiTools\QueryBuilders\PaginationQueryBuilder|UserRole whereCreatedAt($value)
 * @method static \Envoo\LaravelApiTools\QueryBuilders\PaginationQueryBuilder|UserRole whereId($value)
 * @method static \Envoo\LaravelApiTools\QueryBuilders\PaginationQueryBuilder|UserRole whereName($value)
 * @method static \Envoo\LaravelApiTools\QueryBuilders\PaginationQueryBuilder|UserRole whereSlug($value)
 * @method static \Envoo\LaravelApiTools\QueryBuilders\PaginationQueryBuilder|UserRole whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class UserRole extends ApiModel
{
    use HasFactory;
    use HasSlug;

    protected static function newFactory(): UserRoleFactory
    {
        return UserRoleFactory::new();
    }

    public function user(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(User::class, 'role_id', 'id');
    }
}