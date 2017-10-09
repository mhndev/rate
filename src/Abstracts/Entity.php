<?php
/*
 * This file is part of the mhndev\rate package.
 *
 * (c) Majid Abdolhosseini <majid8911303@gmail.com>
 */
namespace mhndev\rate\Abstracts;

use mhndev\rate\Interfaces\iRateableEntity;
use mhndev\rate\Traits\EntityTrait;

/**
 * Class Entity
 * @package mhndev\rate\Abstracts
 */
abstract class Entity implements iRateableEntity
{
    use EntityTrait;

}
