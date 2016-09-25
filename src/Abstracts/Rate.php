<?php

namespace mhndev\rate\Abstracts;

use mhndev\rate\Interfaces\iRate;
use mhndev\rate\Traits\RateTrait;

/**
 * Class Rate
 * @package mhndev\rate\Abstracts
 */
abstract class Rate implements iRate
{
    use RateTrait;

}
