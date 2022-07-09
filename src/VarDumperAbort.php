<?php

namespace Max\HyperfVarDumper;

use Exception;

class VarDumperAbort extends Exception
{
    public array $vars;

    public function __construct($vars)
    {
        $this->vars = $vars;
    }
}
