<?php


namespace Nanaweb\Nagoyaphp13\CommandRunner;


use Nanaweb\Nagoyaphp13\Box;
use Nanaweb\Nagoyaphp13\Command;

interface CommandRunnerInterface
{
    public function run(Box $box, Command $command): Box;

    public function supports(Command $command): bool;
}
