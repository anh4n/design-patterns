<?php

namespace Entwurfsmuster\Mixed;

use Entwurfsmuster\Mixed\Factory\ZählendeEntenFabrik;

include '../autoload.php';

$entensimulator = new EntenSimulator();
$entenFabrik = new ZählendeEntenFabrik();

$entensimulator->simulieren($entenFabrik);
