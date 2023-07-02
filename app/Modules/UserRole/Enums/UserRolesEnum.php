<?php

namespace App\Modules\UserRole\Enums;

use App\Modules\ApiEnum;
use Envoo\LaravelApiTools\Exceptions\NotFoundException;

enum UserRolesEnum: string
{
    case Admin = 'admin';
    case User = 'user';

    public static function __callStatic(string $name, mixed $args): string
    {
        $cases = self::cases();

        foreach ($cases as $case) {
            if ($case->name === $name) {
                return $case->value;
            }
        }

        throw NotFoundException::undefinedCaseError(self::class, $name);
    }

    /**
     * @return array<string>
     */
    public static function options(): array
    {
        return array_column(self::cases(), 'value', 'name');
    }

    /**
     * @return array<string>
     */
    public static function names(): array
    {
        return array_column(self::cases(), 'name');
    }

    /**
     * @return array<string>
     */
    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}