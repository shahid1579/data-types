<?php

declare(strict_types=1);

namespace Comely\DataTypes;

use Comely\DataTypes\BcMath\BcMath;

class DataTypes
{
    public const VERSION = "1.0.34";
    public const VERSION_ID = 10034;

    public static function isBitwise(string $val): bool
    {
        return preg_match('/^[01]+$/', $val);
    }

    public static function isBase16(string $val): bool
    {
        return preg_match('/^(0x)?[a-f0-9]+$/i', $val);
    }

    public static function isHex(string $val): bool
    {
        return self::isBase16($val);
    }

    public static function isBase64(string $val): bool
    {
        return preg_match('/^[a-z0-9+\/]+={0,2}$/i', $val);
    }

    public static function isUtf8(string $val): bool
    {
        return strlen($val) !== mb_strlen($val);
    }

    public static function isNumeric(string $val): bool
    {
        return BcMath::isNumeric($val);
    }
}
