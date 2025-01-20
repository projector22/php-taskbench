<?php

namespace Taskbench;

use Gareth\TermApp\config\Args;
use Gareth\TermApp\config\Config;

final readonly class Tap
{
    private Config $config;
    private Args $args;

    /**
     * @param array<string> $args
     */
    public static function Go(array $args): Tap
    {
        return new Tap($args);
    }

    /**
     * @param array<string> $rawArgs
     */
    public function __construct(public array $rawArgs)
    {
        $this->args = new Args($this->rawArgs);
        $this->config = new Config();
        print_r($this->rawArgs);
    }

    public function bootstrapConfig(): void
    {
        $this->config->run();
    }

    public function handleArguments(): void
    {
        $this->args->run();
    }

    public function preRun(): void {}

    public function run(): void
    {
        $controller = '';
        // $application = new $controller($this->config, $this->args);
        // $application->execute();

    }

    public function postRun(): void {}

    public function __destruct() {}
}
