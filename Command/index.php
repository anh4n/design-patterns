<?php

spl_autoload_register();

use Devices\Light;
use Commands\LightOnCommand;
use Commands\LightOffCommand;

$remoteControl = new RemoteControl();

$light = new Light("Living Room");

$lightOn = new LightOnCommand($light);
$lightOff = new LightOffCommand($light);

$remoteControl->setCommand(0, $lightOn, $lightOff);

echo $remoteControl . "\n";

$remoteControl->onButtonWasPushed(0);

echo $remoteControl . "\n";

$remoteControl->offButtonWasPushed(0);

echo $remoteControl . "\n";

$remoteControl->undoButtonWasPushed();
