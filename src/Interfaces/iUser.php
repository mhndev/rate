<?php

namespace mhndev\rate\Interfaces;

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
