<?php
/**
 * Created by PhpStorm.
 * User: bg
 * Date: 08.06.17
 * Time: 22:46
 */

namespace Conpago\Config\Contract;

use Throwable;

class KeyNotFoundException extends \Exception
{
    const CONFIGURATION_KEY_NOT_FOUND = "Configuration key not found!";

    public function __construct()
    {
        parent::__construct(self::CONFIGURATION_KEY_NOT_FOUND);
    }
}
