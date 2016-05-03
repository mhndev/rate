<?php

namespace mhndev\rate\Abstracts;

use mhndev\Rate\Exceptions\InvalidValue;
use mhndev\Rate\Interfaces\RateValue\iRateValue;

abstract class RateValue implements iRateValue
{

    protected $value;

    /**
     * @param $value
     * @return $this
     * @throws InvalidValue
     */
    function setValue($value)
    {
        if(!$this->isValueValid($value))
            throw new InvalidValue;

        $this->value = $value;

        return $this;
    }

    /**
     * @return mixed
     */
    function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     * @return bool
     */
    abstract function isValueValid($value);
}
