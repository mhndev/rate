<?php
/*
 * This file is part of the mhndev\rate package.
 *
 * (c) Majid Abdolhosseini <majid8911303@gmail.com>
 */
namespace mhndev\rate\Interfaces;

use mhndev\rate\Interfaces\RateValue\iRateValue;

/**
 * Interface iRateableEntity
 * @package mhndev\rate\Interfaces
 */
interface iRateableEntity
{
    /**
     * @param mixed $type
     * @return $this
     */
    function setRateableEntityType($type);

    /**
     * @param mixed $identifier
     * @return $this
     */
    function setRateableEntityIdentifier($identifier);

    /**
     * @return mixed
     */
    function getRateableEntityType();

    /**
     * @return mixed
     */
    function getRateableEntityIdentifier();

    /**
     * @param iRateValue $rateValue
     * @return $this
     */
    static function setRateValue(iRateValue $rateValue);

    /**
     * @return mixed
     */
    static function getRateValue();


    /**
     * @param array $types
     * @return $this
     */
    static function setPossibleRateTypes(array $types);

    /**
     * @return array
     */
    static function getPossibleRateTypes();

}
