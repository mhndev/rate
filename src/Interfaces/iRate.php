<?php

namespace mhndev\rate\Interfaces;

use mhndev\rate\Interfaces\RateValue\iRateValue;

interface iRate
{
    /**
     * @param iUser $user
     * @return $this
     */
    function setUser(iUser $user);

    /**
     * @return iUser
     */
    function getUser();

    /**
     * @param iRateValue $value
     * @return $this
     */
    function setRateValue($value);

    /**
     * @return iRateValue
     */
    function getRateValue();

    /**
     * @param iRateableEntity $entity
     * @return $this
     */
    function setEntity(iRateableEntity $entity);

    /**
     * @return iRateableEntity
     */
    function getEntity();
}
