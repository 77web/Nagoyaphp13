<?php


namespace Nanaweb\Nagoyaphp13;


class Element
{
    /**
     * @var int
     */
    private $index;

    /**
     * @var string
     */
    private $name;

    /**
     * @param int $index
     * @param string $name
     */
    public function __construct(int $index, string $name)
    {
        $this->index = $index;
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getIndex(): int
    {
        return $this->index;
    }

    /**
     * @param int $index
     * @return Element
     */
    public function setIndex($index)
    {
        $this->index = $index;

        return $this;
    }
}
