<?php

namespace mhndev\rate\Abstracts;

use mhndev\rate\Exceptions\InvalidValue;
use mhndev\rate\Interfaces\iRateableEntity;
use mhndev\rate\Interfaces\iUser;
use mhndev\rate\Interfaces\RateValue\iRateValue;

abstract class User implements iUser
{

    /**
     * @var iRateValue
     */
    protected $rateValue;

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
     * @throws InvalidValue
     */
    function rate($value, iRateableEntity $entity)
    {
        if($this->rateValue->isValueValid($value)){
            $this->doRate($value, $entity);
        }else{
            throw new InvalidValue;
        }
    }

    abstract function doRate($value, iRateableEntity $entity);


    public function setRateValue(iRateValue $rateValue)
    {
        $this->rateValue = $rateValue;

        return $this;
    }

    public function getRateValue()
    {
        return $this->rateValue;
    }



}
