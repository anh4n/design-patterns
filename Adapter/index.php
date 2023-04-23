<?php

spl_autoload_register();

$duck = new MallardDuck();
$turkey = new WildTurkey();
$turkeyAdapter = new TurkeyAdapter($turkey);

echo "The Turkey says...\n";
$turkey->gobble();
$turkey->fly();

echo "The Duck says...\n";
testDuck($duck);

echo "The TurkeyAdapter says...\n";
testDuck($turkeyAdapter);

function testDuck(Duck $duck)
{
    $duck->quack();
    $duck->fly();
}
