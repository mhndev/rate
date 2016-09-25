<?php

namespace mhndev\rate\Traits;

use mhndev\rate\Abstracts\Rate;
use mhndev\rate\Exceptions\InvalidRateTypeException;
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
        $this->rate(+1, $entity, Rate::LIKE_TYPE);
    }

    /**
     * @param iRateableEntity $entity
     * @return void
     */
    function dislike(iRateableEntity $entity)
    {
        $this->rate(-1, $entity, Rate::LIKE_TYPE);
    }

    /**
     * @param $value
     * @param iRateableEntity $entity
     * @param string $type
     * @return mixed
     * @throws InvalidRateTypeException
     * @throws InvalidValue
     */
    function rate($value, iRateableEntity $entity, $type = null)
    {
        if(empty($type)){
            $type = Rate::Rate_TYPE;
        }

        if(!in_array($type, $entity->getPossibleRateTypes() ) ){
            throw new InvalidRateTypeException;
        }

        if($entity->getRateValue()->isValueValid($value)){
            $result = $this->doRate($value, $entity, $type);
        }else{
            throw new InvalidValue;
        }

        return $result;
    }

    /**
     * @param $value
     * @param iRateableEntity $entity
     * @param string $type
     * @return mixed
     */
    abstract function doRate($value, iRateableEntity $entity, $type);


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
