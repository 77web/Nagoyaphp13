<?php


namespace Nanaweb\Nagoyaphp13;


class Command
{
    const DIRECTION_UP = 'up';
    const DIRECTION_DOWN = 'down';

    const TARGET_TYPE_COLUMN = 'col';
    const TARGET_TYPE_ROW = 'row';

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $targetType;

    /**
     * @var int
     */
    private $targetNumber;

    /**
     * @var string
     */
    private $direction;

    /**
     * @param string $name
     * @param string $targetType
     * @param int $targetNumber
     * @param string $direction
     */
    public function __construct(string $name, string $targetType, int $targetNumber, string $direction)
    {
        $this->name = $name;
        $this->targetType = $targetType;
        $this->targetNumber = $targetNumber;
        $this->direction = $direction;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getTargetType(): string
    {
        return $this->targetType;
    }

    /**
     * @return int
     */
    public function getTargetNumber(): int
    {
        return $this->targetNumber;
    }

    /**
     * @return string
     */
    public function getDirection(): string
    {
        return $this->direction;
    }
}
