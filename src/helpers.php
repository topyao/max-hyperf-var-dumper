<?php

use Max\HyperfVarDumper\VarDumperAbort;

if (false === function_exists('d')) {
    /**
     * @throws VarDumperAbort
     */
    function d(...$vars)
    {
        throw new VarDumperAbort($vars);
    }
}
