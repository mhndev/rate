<?php
/*
 * This file is part of the mhndev\rate package.
 *
 * (c) Majid Abdolhosseini <majid8911303@gmail.com>
 */
namespace mhndev\rate\Interfaces;

use mhndev\rate\Interfaces\RateValue\iRateValue;

/**
 * Interface iRate
 * @package mhndev\rate\Interfaces
 */
interface iRate
{


    const Rate_TYPE = 'rate';
    const LIKE_TYPE = 'like';

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
