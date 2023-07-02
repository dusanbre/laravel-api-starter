<?php

namespace App\Modules;
use Exception;

class ApiException extends Exception
{
    public static function internalException(): self
    {
        return new self('Internal exception', 500);
    }
}