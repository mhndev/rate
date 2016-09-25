<?php

namespace mhndev\rate\Abstracts;

use mhndev\rate\Interfaces\iRate;
use mhndev\rate\Interfaces\iRateableEntity;
use mhndev\rate\Interfaces\iUser;
use mhndev\rate\Interfaces\RateValue\iRateValue;

/**
 * Class Rate
 * @package mhndev\rate\Abstracts
 */
class Rate implements iRate
{

    const Rate_TYPE = 'rate';
    const LIKE_TYPE = 'like';

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
     * this variable refers to rate type (rate, like, ...)
     * @var string
     */
    protected $type;

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

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }
}
