<?php

namespace mhndev\rate\Traits;

use mhndev\rate\Abstracts\Rate;
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
    protected static $rateValue;


    /**
     * @var array
     */
    protected static $possibleRateTypes = [Rate::LIKE_TYPE, Rate::LIKE_TYPE];

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
     * @param array $types
     * @return $this
     */
    static function setPossibleRateTypes(array $types)
    {
        self::$possibleRateTypes = $types;

        return static::class;
    }

    /**
     * @return array
     */
    function getPossibleRateTypes()
    {
        return self::$possibleRateTypes;
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
    static function setRateValue(iRateValue $rateValue)
    {
        self::$rateValue = $rateValue;

        return static::class;
    }

    static function getRateValue()
    {
        return self::$rateValue;
    }
}
