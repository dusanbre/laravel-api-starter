<?php

namespace Database\Seeders;

use App\Modules\UserRole\Enums\UserRolesEnum;
use App\Modules\UserRole\Models\UserRole;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (UserRolesEnum::cases() as $case) {
            UserRole::create(['name' => $case->value]);
        }
    }
}