<?php

namespace mhndev\rate\Interfaces\RateValue;

interface iRateValue
{
    /**
     * @param $value
     * @return $this
     */
    function setValue($value);

    /**
     * @return mixed
     */
    function getValue();

    /**
     * @param mixed $value
     * @return bool
     */
    function isValueValid($value);
}
