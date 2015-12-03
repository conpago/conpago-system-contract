<?php
/**
 * Created by PhpStorm.
 * User: Bartosz Gołek
 * Date: 09.11.13
 * Time: 15:30
 */

namespace Conpago\File\Contract;

interface IPath
{
    public function get();

    public function getReal();
}
