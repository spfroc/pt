<?php

namespace Adobesun\Pt;
define('AOP_SDK_WORK_DIR', './tmp');

require_once 'AopSdk.php';

class Pt
{



    public function __construct()
    {

    }

    public function add($a, $b)
    {
        return $a + $b;
    }
}