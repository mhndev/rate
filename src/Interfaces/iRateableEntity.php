<?php

namespace mhndev\Rate\Interfaces;

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

}
