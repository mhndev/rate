<?php

namespace mhndev\rate\Interfaces;

use mhndev\rate\Interfaces\RateValue\iRateValue;

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
    function setRateValue(iRateValue $rateValue);

    /**
     * @return mixed
     */
    function getRateValue();


}
