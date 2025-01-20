<?php

namespace Taskbench\config;

final readonly class Args
{
    public function __construct(protected array $args)
    {
        // Do stuff
    }

    public function run(): void {}
}
