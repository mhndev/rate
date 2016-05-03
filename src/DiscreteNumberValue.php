<?php

namespace mhndev\rate;

use mhndev\Rate\Abstracts\RateValue;

class DiscreteNumberValue extends RateValue
{

    protected $possibleValues = [];

    /**
     * @param mixed $value
     * @return bool
     */
    function isValueValid($value)
    {
        return in_array($value, $this->possibleValues);
    }

    /**
     * @param array $values
     * @return $this
     */
    function setPossibleValues(array $values)
    {
        $this->possibleValues = $values;

        return $this;
    }

    /**
     * @return array
     */
    function getPossibleValues()
    {
        return $this->possibleValues;
    }
}
