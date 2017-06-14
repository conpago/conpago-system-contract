<?php
/**
 * Created by PhpStorm.
 * User: Bartosz Gołek
 * Date: 2014-06-09
 * Time: 00:00
 *
 * @package    Conpago-System-Contract
 * @subpackage Config
 * @author     Bartosz Gołek <bartosz.golek@gmail.com>
 * @copyright  Copyright (c) 2015, Bartosz Gołek
 */

namespace Conpago\Config\Contract;

/**
 * Interface that represents access to key/value configuration data.
 */
interface IConfig
{

    /**
     * Gets value identified by key from configuration.
     *
     * @param string $key Key to identify value.
     *
     * @return mixed Returns value identified by key.
     *
     * @throws KeyNotFoundException
     */
    public function getValue(string $key);

    /**
     * Check is key exists in configuration.
     *
     * @param string $key Key to identify value.
     *
     * @return bool Returns false if the
     * key isn't exists in configuration, or true
     * otherwise.
     */
    public function hasValue(string $key): bool;
}
