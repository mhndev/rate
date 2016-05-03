<?php

namespace mhndev\rate\Abstracts;

use mhndev\Rate\Interfaces\iRate;
use mhndev\Rate\Interfaces\iRateableEntity;
use mhndev\Rate\Interfaces\iUser;
use mhndev\Rate\Interfaces\RateValue\iRateValue;

class Rate implements iRate
{

    /**
     * @var iUser
     */
    protected $user;

    /**
     * @var iRateValue
     */
    protected $rateValue;

    /**
     * @var iRateableEntity
     */
    protected $entity;

    /**
     * @param iUser $user
     * @return $this
     */
    function setUser(iUser $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @return iUser
     */
    function getUser()
    {
        return $this->user;
    }

    /**
     * @param iRateValue $value
     * @return $this
     */
    function setRateValue($value)
    {
        $this->rateValue = $value;

        return $this;
    }

    /**
     * @return iRateValue
     */
    function getRateValue()
    {
        return $this->rateValue;
    }

    /**
     * @param iRateableEntity $entity
     * @return $this
     */
    function setEntity(iRateableEntity $entity)
    {
        $this->entity = $entity;

        return $this;
    }

    /**
     * @return iRateableEntity
     */
    function getEntity()
    {
        return $this->entity;
    }
}
