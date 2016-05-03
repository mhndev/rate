<?php

namespace mhndev\rate\Traits;

use mhndev\rate\Exceptions\InvalidValue;
use mhndev\rate\Interfaces\iRateableEntity;
use mhndev\rate\Interfaces\RateValue\iRateValue;

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
        if($entity->getRateValue()->isValueValid($value)){
            $this->doRate($value, $entity);
        }else{
            throw new InvalidValue;
        }
    }

    /**
     * @param $value
     * @param iRateableEntity $entity
     * @return mixed
     */
    abstract function doRate($value, iRateableEntity $entity);


    /**
     * @param iRateValue $rateValue
     * @return $this
     */
    function setRateValue(iRateValue $rateValue)
    {
        $this->rateValue = $rateValue;

        return $this;
    }

    /**
     * @return iRateValue
     */
    public function getRateValue()
    {
        return $this->rateValue;
    }

}
