<?php

namespace Nanaweb\Nagoyaphp13;

use Nanaweb\Nagoyaphp13\CommandRunner\CommandRunnerInterface;

class CommandRunnerResolver
{
    /**
     * @var CommandRunnerInterface[]
     */
    private $commandRunners = [];

    public function addCommandRunner(CommandRunnerInterface $commandRunner)
    {
        $this->commandRunners[] = $commandRunner;

        return $this;
    }

    public function resolve(Command $target)
    {
        foreach ($this->commandRunners as $commandRunner) {
            if ($commandRunner->supports($target)) {
                return $commandRunner;
            }
        }

        throw new \LogicException('No CommandRunner defined');
    }
}
