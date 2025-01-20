<?php

namespace Taskbench\utils;

final readonly class Installer {
    public static function postCreateProject(): void {
        $directories = [
            "config" => ["config.yml"],
            "tasks" => [],
            "models" => [],
        ];

        print_r(realpath(__DIR__ . "/../.."));
    }

    public static function postInstall(): void {
    }
}
