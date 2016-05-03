<?php

namespace mhndev\Rate\Abstracts;

use mhndev\Rate\Interfaces\iRateableEntity;
use mhndev\Rate\Interfaces\iUser;

class User implements iUser
{

    /**
     * @param iRateableEntity $entity
     * @return void
     */
    function like(iRateableEntity $entity)
    {
        // TODO: Implement like() method.
    }

    /**
     * @param iRateableEntity $entity
     * @return void
     */
    function dislike(iRateableEntity $entity)
    {
        // TODO: Implement dislike() method.
    }

    /**
     * @param $value
     * @param iRateableEntity $entity
     * @return void
     */
    function rate($value, iRateableEntity $entity)
    {
        // TODO: Implement rate() method.
    }
}
