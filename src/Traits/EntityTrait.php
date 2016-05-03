<?php

namespace mhndev\rate\Traits;

use mhndev\rate\Interfaces\RateValue\iRateValue;

trait EntityTrait
{

    /**
     * @var string
     */
    protected $rateableEntityType;

    /**
     * @var mixed
     */
    protected $rateableEntityIdentifier;

    /**
     * @var
     */
    protected $rateValue;


    /**
     * @param string $type
     * @return $this
     */
    function setRateableEntityType($type)
    {
        $this->rateableEntityType = $type;

        return $this;
    }

    /**
     * @param mixed $identifier
     * @return $this
     */
    function setRateableEntityIdentifier($identifier)
    {
        $this->rateableEntityIdentifier = $identifier;

        return $this;
    }

    /**
     * @return string
     */
    function getRateableEntityType()
    {
        return $this->rateableEntityType;
    }

    /**
     * @return mixed
     */
    function getRateableEntityIdentifier()
    {
        return $this->rateableEntityIdentifier;
    }

    /**
     * @param iRateValue $rateValue
     * @return $this
     */
    function setRateValue(iRateValue $rateValue)
    {
        $this->rateValue = $rateValue;

        return $this;
    }

    function getRateValue()
    {
        return $this->rateValue;
    }
}
