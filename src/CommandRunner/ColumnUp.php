<?php


namespace Nanaweb\Nagoyaphp13\CommandRunner;


use Nanaweb\Nagoyaphp13\Box;
use Nanaweb\Nagoyaphp13\Command;

class ColumnUp implements CommandRunnerInterface
{
    public function run(Box $box, Command $command): Box
    {
        $row = $box->getColumn($command->getTargetNumber());
        $row[0]->setIndex($row[0]->getIndex() + 6);
        $row[1]->setIndex($row[1]->getIndex() - 3);
        $row[2]->setIndex($row[2]->getIndex() - 3);

        return $box->updateMap($row);
    }

    public function supports(Command $command): bool
    {
        return $command->getTargetType() === Command::TARGET_TYPE_COLUMN && $command->getDirection() === Command::DIRECTION_UP;
    }

}
