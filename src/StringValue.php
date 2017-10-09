<?php
/*
 * This file is part of the mhndev\rate package.
 *
 * (c) Majid Abdolhosseini <majid8911303@gmail.com>
 */
namespace mhndev\rate;

use mhndev\rate\Abstracts\RateValue;

/**
 * Class StringValue
 * @package mhndev\rate
 */
class StringValue extends RateValue
{

    /**
     * @var array
     */
    protected $possibleValues;

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
