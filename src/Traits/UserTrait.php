<?php

namespace mhndev\Rate\Traits;

use mhndev\Rate\Interfaces\iRateableEntity;

trait UserTrait
{
    /**
     * @param iRateableEntity $entity
     * @return void
     */
    function like(iRateableEntity $entity)
    {
        $this->rate(+1, $entity);
    }

    /**
     * @param iRateableEntity $entity
     * @return void
     */
    function dislike(iRateableEntity $entity)
    {
        $this->rate(-1, $entity);
    }

    /**
     * @param $value
     * @param iRateableEntity $entity
     * @return void
     */
    abstract function rate($value, iRateableEntity $entity);
}
