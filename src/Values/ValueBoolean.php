<?php declare(strict_types=1);

namespace GQLSchema\Values;

/**
 * Class ValueBoolean
 * @package GQLSchema\Values
 */
class ValueBoolean implements Value
{
    /**
     * @var bool
     */
    private $value;

    /**
     * ValueBoolean constructor.
     * @param bool $value
     */
    public function __construct(bool $value)
    {
        $this->value = $value;
    }

    /**
     * @return bool
     */
    public function getValue(): bool
    {
        return $this->value;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->value ? 'true' : 'false';
    }
}
