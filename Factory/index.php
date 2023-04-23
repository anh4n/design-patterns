<?php

spl_autoload_register();

$berlinPizzeria = new BerlinerPizzeria();
//$münchenPizzeria = new MuenchenerPizzeria();

$pizza = $berlinPizzeria->bestellePizza("Salami");
echo "$pizza";

