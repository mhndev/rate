<?php

namespace mhndev\rate;

use mhndev\rate\Abstracts\RateValue;
use mhndev\rate\Exceptions\InvalidRange;

/**
 * Class ContinuousNumberValue
 * @package mhndev\rate
 */
class ContinuousNumberValue extends RateValue
{

    /**
     * @var
     */
    protected $possibleRange;

    /**
     * @param mixed $value
     * @return bool
     */
    function isValueValid($value)
    {
        if(isAssoc($value)){
            return ($value < $this->possibleRange[1] && $value > $this->possibleRange[0]);
        }else{
            foreach ($this->possibleRange as $range){
                if($value < $range[1] && $value > $range[0])
                    return true;
            }

            return false;
        }
    }

    /**
     * @param array $values
     * @return $this
     */
    function setPossibleRange(array $values)
    {
        if(isAssoc($values)){
            for($i=0;$i<count($values); $i++){
                for($j=$i+1;$j<count($values); $j++){
                    $this->hasOverLap($values[$i], $values[$j]);
                }
            }
        }

        $this->possibleRange = $values;

        return $this;
    }

    /**
     * @return array
     */
    function getPossibleRange()
    {
        return $this->possibleRange;
    }

    /**
     * @param array $rangeA
     * @param array $rangeB
     * @return bool
     * @throws InvalidRange
     */
    protected function hasOverLap(array $rangeA, array $rangeB)
    {
        if(isAssoc($rangeA) || isAssoc($rangeB) || count($rangeA) != 2 || count($rangeB) != 2)
            throw new InvalidRange;

        if( ( ($rangeA[1] > $rangeB[0]) && ($rangeA[0] < $rangeB[0]) ) || ( ($rangeB[1] > $rangeA[0]) && ($rangeB[0] < $rangeA[0]) ) )
            return false;
        else
            return true;
    }
}
