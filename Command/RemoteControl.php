<?php

use Commands\NoCommand;
use Commands\Command;

/**
 * Class RemoteControl
 */
class RemoteControl
{
    protected $onCommands;
    protected $offCommands;
    protected $undoCommand;

    /**
     *
     */
    public function __construct()
    {
        $this->onCommands = array();
        $this->offCommands = array();

        $noCommand = new NoCommand();
        for ($i = 0; $i < 7; $i++) {
            $this->onCommands[$i] = $noCommand;
            $this->offCommands[$i] = $noCommand;
        }
        $this->undoCommand = $noCommand;
    }

    /**
     * @param int $slot
     * @param Command $onCommand
     * @param Command $offCommand
     */
    public function setCommand($slot, Command $onCommand, Command $offCommand)
    {
        $this->onCommands[$slot] = $onCommand;
        $this->offCommands[$slot] = $offCommand;
    }

    /**
     * @param int $slot
     */
    public function onButtonWasPushed($slot)
    {
        $this->onCommands[$slot]->execute();
        $this->undoCommand = $this->onCommands[$slot];
    }

    /**
     * @param int $slot
     */
    public function offButtonWasPushed($slot)
    {
        $this->offCommands[$slot]->execute();
        $this->undoCommand = $this->offCommands[$slot];
    }

    /**
     *
     */
    public function undoButtonWasPushed()
    {
        $this->undoCommand->undo();
    }

    /**
     * @return string
     */
    public function __toString()
    {
        $out = "\n------ Remote Control -------\n";

        for ($i = 0; $i < count($this->onCommands); $i++) {
            $out .= "[slot $i] " . get_class($this->onCommands[$i]) . "    " . get_class($this->offCommands[$i]) . "\n";
        }

        $out .= "[undo] " . get_class($this->undoCommand) . "\n";

        return $out;
    }
}
