<?php

spl_autoload_register();

$wetterDaten = new WetterDaten();

$statistikAnzeige = new StatistikAnzeige($wetterDaten);
$aktuelleAnzeige = new AktuelleBedingungenAnzeige($wetterDaten);

$wetterDaten->setMesswerte(30, 65, 30.4);
$wetterDaten->setMesswerte(32, 70, 29.2);
$wetterDaten->setMesswerte(20, 50, 29.2);
