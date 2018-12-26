<?php


namespace Nanaweb\Nagoyaphp13\CommandRunner;


use Nanaweb\Nagoyaphp13\Box;
use Nanaweb\Nagoyaphp13\Command;
use Nanaweb\Nagoyaphp13\Element;
use PHPUnit\Framework\TestCase;

class RowUpTest extends TestCase
{
    public function test()
    {
        $box = new Box([
            new Element(0, 'a'),
            new Element(1, 'b'),
            new Element(2, 'c'),
        ]);
        $command = new Command('dummy', 'dummy', 0, 'dummy');

        $SUT = new RowUp();
        $actual = $SUT->run($box, $command);
        $map = $actual->getMap();

        $this->assertEquals('b', $map[0]->getName());
        $this->assertEquals('c', $map[1]->getName());
        $this->assertEquals('a', $map[2]->getName());
    }
}
