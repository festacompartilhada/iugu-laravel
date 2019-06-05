<?php

namespace unaspbr;

use Config;

/**
 * IuguLaravel ─ Wraps iugu-php to be used on Laravel
 *
 * @author Mateus Felipe <mateusfccp@gmail.com>
 * @package IuguLaravel
 * @version 0.0.1
 */
class IuguLaravel {
    public static function r($resource)
    {
        Iugo::setApiKey(Config::get('iugu_laravel.IUGU_API_KEY'));
        
        $class_name = "Iugu_" . strtoupper(substr($resource, 0, 1)) . strtolower(substr($resource, 1));

        return $class_name;
    }
}

