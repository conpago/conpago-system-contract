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
 * This interface representing tool to work with path independently from OS.
 */
interface IPathBuilder
{

    /**
     * Build path from string elements.
     *
     * @param string[] $elements The elements to join.
     *
     * @return string Returns a string of elements joined with DIRECTORY_SEPARATOR.
     */
    public function createPath(array $elements);

    /**
     * Get file name from path.
     *
     * @param string $filePath Path to a file.
     *
     * @return string Returns file name without path of directories.
     */
    public function fileName($filePath);
}
