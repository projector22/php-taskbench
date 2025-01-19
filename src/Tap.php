<?php

namespace Gareth\TermApp;

final readonly class Tap {
    public static function Go(array $args): static {
        return new Tap($args);
    }

    /**
     * @param array<string> $args
     */
    public function __construct(public array $args) {
        print_r($this->args);
    }

    public function bootstrapConfig(): void {
    }

    public function handleArguments(): void {
    }

    public function preRun(): void {
    }

    public function run(): void {
    }

    public function postRun(): void {
    }

    public function __destruct() {
    }
}
