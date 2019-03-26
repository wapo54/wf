<?php
/**
 * Created by PhpStorm.
 * User: student
 * Date: 3/26/2019
 * Time: 12:21 PM
 */

spl_autoload_register(function ($className) {
    $file = __DIR__ . '/' . $className . '.php';
    if (is_file($file)) {
        require_once $file;
    }

});