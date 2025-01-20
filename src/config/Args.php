<?php

namespace Taskbench\config;

final readonly class Args {
    /**
     * @param array<string> $args
     */
    public function __construct(protected array $args) {
        // Do stuff
    }

    public function run(): void {
    }
}
