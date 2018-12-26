<?php


namespace Nanaweb\Nagoyaphp13\CommandRunner;


use Nanaweb\Nagoyaphp13\Box;
use Nanaweb\Nagoyaphp13\Command;

class ColumnDown implements CommandRunnerInterface
{
    public function run(Box $box, Command $command): Box
    {
        $column = $box->getColumn($command->getTargetNumber());
        $column[0]->setIndex($column[0]->getIndex() + 3);
        $column[1]->setIndex($column[1]->getIndex() + 3);
        $column[2]->setIndex($column[2]->getIndex() - 6);

        return $box->updateMap($column);
    }

    public function supports(Command $command): bool
    {
        return $command->getTargetType() === Command::TARGET_TYPE_COLUMN && $command->getDirection() === Command::DIRECTION_DOWN;
    }

}
