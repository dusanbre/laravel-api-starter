<?php

namespace App\Modules;

use Envoo\LaravelApiTools\Traits\Filterable;
use Envoo\LaravelApiTools\Traits\InteractWithPagination;
use Envoo\LaravelApiTools\Traits\InteractWithSort;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;

abstract class ApiModel extends Model
{
    use InteractWithPagination;
    use InteractWithSort;
    use Filterable;

    protected $guarded = ['id'];
}