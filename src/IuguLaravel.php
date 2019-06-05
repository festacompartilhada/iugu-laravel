<?php

namespace unaspbr;

use Config;

/**
 * IuguLaravel ─ Wraps iugu-php to be used on Laravel
 *
 * @author Mateus Felipe <mateusfccp@gmail.com>
 * @package IuguLaravel
 * @version 1.0.3
 */
class IuguLaravel {
    public static function r($resource)
    {
        $class_name = "\Iugu_" . strtoupper(substr($resource, 0, 1)) . strtolower(substr($resource, 1));

        return $class_name;
    }
}

