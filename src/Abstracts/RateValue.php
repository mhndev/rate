<?php
/*
 * This file is part of the mhndev\rate package.
 *
 * (c) Majid Abdolhosseini <majid8911303@gmail.com>
 */
namespace mhndev\rate\Abstracts;

use mhndev\rate\Exceptions\InvalidValue;
use mhndev\rate\Interfaces\RateValue\iRateValue;

/**
 * Class RateValue
 * @package mhndev\rate\Abstracts
 */
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
