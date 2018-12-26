<?php


namespace Nanaweb\Nagoyaphp13\CommandRunner;


use Nanaweb\Nagoyaphp13\Box;
use Nanaweb\Nagoyaphp13\Command;
use Nanaweb\Nagoyaphp13\Element;
use PHPUnit\Framework\TestCase;

class RowDownTest extends TestCase
{
    public function test()
    {
        $box = new Box([
            new Element(0, 'a'),
            new Element(1, 'b'),
            new Element(2, 'c'),
        ]);
        $command = new Command('dummy', 'dummy', 0, 'dummy');

        $SUT = new RowDown();
        $actual = $SUT->run($box, $command);
        $map = $actual->getMap();

        $this->assertEquals('c', $map[0]->getName());
        $this->assertEquals('a', $map[1]->getName());
        $this->assertEquals('b', $map[2]->getName());
    }
}
