<?php
/**
 * Created by PhpStorm.
 * User: Bartosz Gołek
 * Date: 2014-06-10
 * Time: 20:19
 *
 * @package    Conpago-System-Contract
 * @subpackage Time
 * @author     Bartosz Gołek <bartosz.golek@gmail.com>
 * @copyright  Copyright (c) 2015, Bartosz Gołek
 */

namespace Conpago\Time\Contract;

use DateTime;

/**
 * Interface represents access to system time.
 */
interface ITimeService
{

    /**
     * Gets current DateTime.
     *
     * @return DateTime This function returns current system DateTime.
     */
    public function getCurrentTime();
}
