<?php

namespace FiveamCode\LaravelNotionApi\Entities\Properties;

use FiveamCode\LaravelNotionApi\Entities\Contracts\Modifiable;

/**
 * Class Number.
 */
class Number extends Property implements Modifiable
{
    /**
     * @var float|int|null
     */
    protected float|int|null $number = 0;

    public static function value(float|int|null $number): Number
    {
        $numberProperty = new Number();
        $numberProperty->number = $number;
        $numberProperty->content = $number;

        $numberProperty->rawContent = [
            'number' => $number,
        ];

        return $numberProperty;
    }

    protected function fillFromRaw(): void
    {
        parent::fillFromRaw();
        $this->fillNumber();
    }

    protected function fillNumber(): void
    {
        $this->content = $this->rawContent;
    }

    /**
     * @return float
     */
    public function getContent(): float|int
    {
        return $this->content;
    }

    /**
     * @return float
     */
    public function getNumber(): float|int|null
    {
        return $this->content;
    }
}
