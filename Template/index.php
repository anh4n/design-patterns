<?php

spl_autoload_register();

$tea = new Tea();
$coffee = new Coffee();

echo "\nMaking tea...\n";
$tea->prepareRecipe();

echo "\nMaking coffee...\n";
$coffee->prepareRecipe();

