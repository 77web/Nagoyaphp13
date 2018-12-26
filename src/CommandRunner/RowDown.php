<?php


namespace Nanaweb\Nagoyaphp13\CommandRunner;


use Nanaweb\Nagoyaphp13\Box;
use Nanaweb\Nagoyaphp13\Command;

class RowDown implements CommandRunnerInterface
{
    public function run(Box $box, Command $command): Box
    {
        $row = $box->getRow($command->getTargetNumber());
        $row[0]->setIndex($row[0]->getIndex() + 1);
        $row[1]->setIndex($row[1]->getIndex() + 1);
        $row[2]->setIndex($row[2]->getIndex() - 2);

        return $box->updateMap($row);
    }

    public function supports(Command $command): bool
    {
        return $command->getTargetType() === Command::TARGET_TYPE_ROW && $command->getDirection() === Command::DIRECTION_DOWN;
    }

}
