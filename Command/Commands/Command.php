<?php

namespace Commands;

/**
 * Interface Command
 */
interface Command
{
    public function execute();
    public function undo();
}
