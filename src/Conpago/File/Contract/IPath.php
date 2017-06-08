<?php
/**
 * Created by PhpStorm.
 * User: Bartosz Gołek
 * Date: 09.11.13
 * Time: 15:30
 *
 * @package    Conpago-System-Contract
 * @subpackage File
 * @author     Bartosz Gołek <bartosz.golek@gmail.com>
 * @copyright  Copyright (c) 2015, Bartosz Gołek
 */

namespace Conpago\File\Contract;

/**
 * Interface represents Path to resource.
 */
interface IPath
{

    /**
     * Gets path to the resource.
     *
     * @return string Path to resource.
     */
    public function get(): string;

    /**
     * Gets real path to the resource.
     *
     * @return string Real path to resource.
     */
    public function getReal(): string;
}
