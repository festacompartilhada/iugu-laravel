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
        $resource_class = implode(
            array_map(function ($word) use ($resource) {
                return strtoupper(substr($word, 0, 1)) . strtolower(substr($word, 1));
            }, explode('_', $resource))
        );
        
        $class_name = "\Iugu_" . $resource_class;

        return $class_name;
    }
}

