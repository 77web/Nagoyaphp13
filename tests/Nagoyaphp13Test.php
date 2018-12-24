<?php
/**
 * This file is part of the Ttskch.Nagoyaphp13
 *
 * @license http://opensource.org/licenses/MIT MIT
 */
namespace Ttskch\Nagoyaphp13;

use PHPUnit\Framework\TestCase;

class Nagoyaphp13Test extends TestCase
{
    /**
     * @var Nagoyaphp13
     */
    protected $nagoyaphp13;

    protected function setUp()
    {
        $this->nagoyaphp13 = new Nagoyaphp13;
    }

    public function testIsInstanceOfNagoyaphp13()
    {
        $actual = $this->nagoyaphp13;
        $this->assertInstanceOf(Nagoyaphp13::class, $actual);
    }
}
