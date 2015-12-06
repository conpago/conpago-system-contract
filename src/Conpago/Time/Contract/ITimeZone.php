<?php
/**
 * Created by PhpStorm.
 * User: bg
 * Date: 03.12.15
 * Time: 22:50
 *
 * @package    Conpago-System-Contract
 * @subpackage Time
 * @author     Bartosz Gołek <bartosz.golek@gmail.com>
 * @copyright  Copyright (c) 2015, Bartosz Gołek
 */

namespace Conpago\Time\Contract;

/**
 * Interface to manage timezone
 */
interface ITimeZone
{

    /**
     * Sets the default timezone used by all date/time functions in a script
     *
     * @param string $timezoneIdentifier The timezone identifier, like UTC or
     * Europe/Lisbon. The list of valid identifiers is
     * available in the.
     *
     * @return bool This function returns false if the
     * timezone_identifier isn't valid, or true
     * otherwise.
     */
    public function setDefaultTimeZone($timezoneIdentifier);
}
