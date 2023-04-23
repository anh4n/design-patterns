<?php

spl_autoload_register(
    function ($class) {
        $class = str_replace("\\", "/", $class);
        $path = realpath(__DIR__ . "/../");
        include("$path/$class.php");
    }
);
