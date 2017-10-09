<?php
/*
 * This file is part of the mhndev\rate package.
 *
 * (c) Majid Abdolhosseini <majid8911303@gmail.com>
 */
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
