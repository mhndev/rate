<?php
/*
 * This file is part of the mhndev\rate package.
 *
 * (c) Majid Abdolhosseini <majid8911303@gmail.com>
 */
namespace mhndev\rate\Interfaces\RateValue;

/**
 * Interface iRateValue
 * @package mhndev\rate\Interfaces\RateValue
 */
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
