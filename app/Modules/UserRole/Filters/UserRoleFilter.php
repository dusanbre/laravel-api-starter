<?php

namespace App\Modules\UserRole\Filters;

use Envoo\LaravelApiTools\Http\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;

class UserRoleFilter extends Filter
{
    /**
     * @var array|string[]
     */
    protected array $filters = ['name', 'slug'];

    /**
     * @param  string  $value
     * @return Builder
     */
    public function name(string $value): Builder
    {
        return $this->builder->where('name', 'like', "%$value%");
    }

    public function slug(string $value): Builder
    {
        return $this->builder->where('slug', 'like', "%$value%");
    }
}