<?php
/**
 * Created by PhpStorm.
 * User: bg
 * Date: 28.11.15
 * Time: 13:10
 *
 * @package    Conpago-System-Contract
 * @subpackage Config
 * @author     Bartosz Gołek <bartosz.golek@gmail.com>
 * @copyright  Copyright (c) 2015, Bartosz Gołek
 */

namespace Conpago\Config\Contract;

/**
 * Interface represents configuration class factory.
 */
interface IConfigBuilder
{

    /**
     * Builds configuration associative array.
     *
     * @return array This function returns associative configuration array
     */
    public function build();
}
