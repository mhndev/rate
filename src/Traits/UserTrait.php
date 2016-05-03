<?php

namespace mhndev\rate\Traits;

use mhndev\Rate\Exceptions\InvalidValue;
use mhndev\Rate\Interfaces\iRateableEntity;
use mhndev\Rate\Interfaces\RateValue\iRateValue;

trait UserTrait
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
