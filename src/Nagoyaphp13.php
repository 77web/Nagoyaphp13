<?php

namespace Nanaweb\Nagoyaphp13;

class Nagoyaphp13
{
    /**
     * @var CommandRunnerResolver
     */
    private $runnerResolver;

    /**
     * @var CommandRegistry
     */
    private $commandRegistry;

    /**
     * @param CommandRunnerResolver $runnerResolver
     * @param CommandRegistry $commandRegistry
     */
    public function __construct(CommandRunnerResolver $runnerResolver, CommandRegistry $commandRegistry)
    {
        $this->runnerResolver = $runnerResolver;
        $this->commandRegistry = $commandRegistry;
    }

    public function run(string $input): string
    {
        $box = new Box([
            new Element(0, 1),
            new Element(1, 2),
            new Element(2, 3),
            new Element(3, 4),
            new Element(4, 5),
            new Element(5, 6),
            new Element(6, 7),
            new Element(7, 8),
            new Element(8, 9),
        ]);
        $commands = array_map(function($commandString){
            return $this->commandRegistry->get($commandString);
        }, str_split($input));


        foreach ($commands as $command) {
            $runner = $this->runnerResolver->resolve($command);
            $box = $runner->run($box, $command);
        }

        // please implement me.
        return $box;
    }
}
