<?php

spl_autoload_register();

$mallard = new StockEnte();
$mallard->tuQuaken();
$mallard->tuFliegen();

$modell = new ModellEnte();
$modell->tuFliegen();
$modell->setFlugverhalten(new FliegtRaketenGetrieben());
$modell->tuFliegen();
