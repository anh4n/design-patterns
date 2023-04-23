<?php

spl_autoload_register();

$getraenk = new Espresso();

echo "{$getraenk->getBeschreibung()} {$getraenk->preis()} €\n";

$getraenk2 = new DunkleRoestung();
$getraenk2 = new Schoko($getraenk2);
$getraenk2 = new Schoko($getraenk2);
$getraenk2 = new Milchschaum($getraenk2);

echo "{$getraenk2->getBeschreibung()} {$getraenk2->preis()} €\n";

$getraenk3 = new HausMischung();
$getraenk3 = new Soja($getraenk3);
$getraenk3 = new Schoko($getraenk3);
$getraenk3 = new Milchschaum($getraenk3);

echo "{$getraenk3->getBeschreibung()} {$getraenk3->preis()} €\n";
