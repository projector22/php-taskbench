<?php

namespace Gareth\TermApp\controller;

use Gareth\TermApp\config\Config;
use Gareth\TermApp\utils\Args;

abstract class BaseApplicationController
{

    public function __construct(Config $config, Args $args)
    {
        // Do stuff
    }
}
