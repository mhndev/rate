<?php
/*
 * This file is part of the mhndev\rate package.
 *
 * (c) Majid Abdolhosseini <majid8911303@gmail.com>
 */
namespace mhndev\rate\Abstracts;

use mhndev\rate\Interfaces\iUser;
use mhndev\rate\Traits\UserTrait;

/**
 * Class User
 * @package mhndev\rate\Abstracts
 */
abstract class User implements iUser
{
    use UserTrait;
}
