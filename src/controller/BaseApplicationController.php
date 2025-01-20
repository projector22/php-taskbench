<?php

namespace Taskbench\controller;

use Taskbench\config\Args;
use Taskbench\config\Config;

abstract class BaseApplicationController {
    public function __construct(Config $config, Args $args) {
        // Do stuff
    }

    public function execute(): void {
    }
}
