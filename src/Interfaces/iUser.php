<?php
/*
 * This file is part of the mhndev\rate package.
 *
 * (c) Majid Abdolhosseini <majid8911303@gmail.com>
 */
namespace mhndev\rate\Interfaces;

/**
 * Interface iUser
 * @package mhndev\rate\Interfaces
 */
interface iUser
{
    /**
     * @param iRateableEntity $entity
     * @return void
     */
    function like(iRateableEntity $entity);

    /**
     * @param iRateableEntity $entity
     * @return void
     */
    function dislike(iRateableEntity $entity);

    /**
     * @param $value
     * @param iRateableEntity $entity
     * @return void
     */
    function rate($value, iRateableEntity $entity);

}
