<?php

namespace unaspbr;

/**
 * Iugu ─ Wraps iugu-php to be used on Laravel
 *
 * @author Mateus Felipe <mateusfccp@gmail.com>
 * @package IuguLaravel
 * @version 1.0.5
 */
class Iugu {
    public static function r($resource)
    {
        $class_name = "\Iugu_" . strtoupper(substr($resource, 0, 1)) . strtolower(substr($resource, 1));

        return $class_name;
    }
}

