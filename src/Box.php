<?php


namespace Nanaweb\Nagoyaphp13;


class Box
{
    /**
     * @var Element[]
     */
    private $map;

    /**
     * @param Element[] $elements
     */
    public function __construct(array $elements)
    {
        $this->map = [];
        $this->updateMap($elements);
    }

    /**
     * @return Element[]
     */
    public function getMap()
    {
        return $this->map;
    }

    /**
     * @param int $index
     * @return Element[]
     */
    public function getRow(int $index): array
    {
        return [
            $this->map[3 * $index + 0],
            $this->map[3 * $index + 1],
            $this->map[3 * $index + 2],
        ];
    }

    /**
     * @param int $index
     * @return Element[]
     */
    public function getColumn(int $index): array
    {
        return [
            $this->map[$index],
            $this->map[$index + 3],
            $this->map[$index + 6],
        ];
    }

    public function updateMap(array $elements): Box
    {
        foreach ($elements as $element) {
            $this->map[$element->getIndex()] = $element;
        }

        return $this;
    }

    public function __toString(): string
    {
        $result = [];
        for ($i = 0; $i < 3; $i++) {
            $result[] = implode('', array_map(function(Element $element){ return $element->getName(); }, $this->getRow($i)));
        }

        return implode('/', $result);
    }
}
