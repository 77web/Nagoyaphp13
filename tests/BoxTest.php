<?php


namespace Nanaweb\Nagoyaphp13;


use PHPUnit\Framework\TestCase;

class BoxTest extends TestCase
{
    public function test_getRow()
    {
        $box = new Box([
            new Element(0, 'a'),
            new Element(1, 'b'),
            new Element(2, 'c'),
            new Element(3, 'd'),
            new Element(4, 'e'),
            new Element(5, 'f'),
            new Element(6, 'g'),
        ]);

        $this->assertEquals(['a', 'b', 'c'], array_map(function(Element $element){ return $element->getName(); }, $box->getRow(0)));
        $this->assertEquals(['d', 'e', 'f'], array_map(function(Element $element){ return $element->getName(); }, $box->getRow(1)));
    }
}
