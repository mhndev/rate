<?php

namespace mhndev\rate\Traits;

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
}
