<?php

namespace Gareth\TermApp;

use Gareth\TermApp\config\Args;
use Gareth\TermApp\config\Config;

final readonly class Tap
{

    private Config $config;
    private Args $args;

    public static function Go(array $args): static
    {
        return new Tap($args);
    }

    /**
     * @param array<string> $args
     */
    public function __construct(public array $rawArgs)
    {
        print_r($this->rawArgs);
    }

    public function bootstrapConfig(): void
    {
        $this->config = new Config();
    }

    public function handleArguments(): void
    {
        $this->args = new Args($this->rawArgs);
    }

    public function preRun(): void {}

    public function run(): void
    {
        $controller = '';
        //        $application = new $controller($this->config, $this->args);
        //         $application->execute();

    }

    public function postRun(): void {}

    public function __destruct() {}
}
