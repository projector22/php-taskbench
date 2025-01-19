<?php

namespace Gareth\TermApp\controller;

use Gareth\TermApp\config\Args;
use Gareth\TermApp\config\Config;

abstract class BaseApplicationController {
    public function __construct(Config $config, Args $args) {
        // Do stuff
    }

    public function execute(): void {
    }
}
