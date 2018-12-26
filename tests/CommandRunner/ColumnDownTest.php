<?php


namespace Nanaweb\Nagoyaphp13\CommandRunner;


use Nanaweb\Nagoyaphp13\Box;
use Nanaweb\Nagoyaphp13\Command;
use Nanaweb\Nagoyaphp13\Element;
use PHPUnit\Framework\TestCase;

class ColumnDownTest extends TestCase
{
    public function test()
    {
        $box = new Box([
            new Element(0, 'a'),
            new Element(1, 'b'),
            new Element(2, 'c'),
            new Element(3, 'd'),
            new Element(4, 'e'),
            new Element(5, 'f'),
            new Element(6, 'g'),
            new Element(7, 'h'),
            new Element(8, 'i'),
        ]);
        $command = new Command('dummy', 'dummy', 0, 'dummy');

        $SUT = new ColumnDown();
        $actual = $SUT->run($box, $command);
        $map = $actual->getMap();

        $this->assertEquals('g', $map[0]->getName());
        $this->assertEquals('a', $map[3]->getName());
        $this->assertEquals('d', $map[6]->getName());
    }
}
