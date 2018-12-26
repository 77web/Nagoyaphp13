<?php


namespace Nanaweb\Nagoyaphp13;


class CommandRegistry
{
    /**
     * @var Command[]
     */
    private $commands;

    /**
     * @param Command[] $commands
     */
    public function __construct(array $commands)
    {
        $this->commands = $commands;
    }

    public function get(string $name)
    {
        foreach ($this->commands as $command) {
            if ($command->getName() === $name) {
                return $command;
            }
        }
    }
}
