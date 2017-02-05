<?php
/**
 * Created by PhpStorm.
 * User: bgolek
 * Date: 2014-10-10
 * Time: 07:57
 *
 * @package    Conpago-System-Contract
 * @subpackage File
 * @author     Bartosz Gołek <bartosz.golek@gmail.com>
 * @copyright  Copyright (c) 2015, Bartosz Gołek
 */

namespace Conpago\File\Contract;

/**
 * Interface IFileSystem
 */
interface IFileSystem
{

    /**
     * Wrapper for include statement.
     *
     * @param string $filePath Path to file.
     *
     * @return mixed Depends on included file.
     */
    public function includeFile($filePath);

    /**
     * Find pathnames matching a pattern.
     * Wrapper for PHP {@link http://php.net/manual/en/function.glob.php glob()} function.
     *
     * @param string $pattern The pattern. No tilde expansion or parameter substitution is done.
     *
     * @return mixed Returns an array containing the matched files/directories, an empty array if no file
     * matched or FALSE on error.
     */
    public function glob($pattern);

    /**
     * Returns canonicalized absolute pathname.
     * Wrapper for PHP {@link http://php.net/manual/en/function.realpath.php realpath()} function.
     *
     * @param string $path The path being checked.
     *
     * @return mixed Returns the canonicalized absolute pathname on success.
     * The resulting path will have no symbolic link, '/./' or '/../' components.
     * Trailing delimiters, such as \ and /, are also removed.
     * Returns FALSE on failure, e.g. if the file does not exist.
     */
    public function realPath($path);

    /**
     * Find pathnames matching a pattern.
     * Wrapper for PHP {@link http://php.net/manual/en/function.require-once.php require_once} statement.
     *
     * @param string $filePath Path to resource to require.
     *
     * @return mixed Depends on included file.
     */
    public function requireOnce($filePath);

    /**
     * Include file and instantiate class from file. ClassName must be same as fileName and filePath with namespace.
     *
     * @param string $filePath File with class to load.
     *
     * @return mixed Returns instance of class from file.
     */
    public function loadClass($filePath);

    /**
     * Wrapper for PHP {@link http://php.net/manual/en/function.require.php require} statement.
     *
     * @param string $filePath Path to resource to require.
     *
     * @return mixed Depends on included file.
     */
    public function requireFile($filePath);

    /**
     * Attempts to create the directory specified by pathname.
     *
     * @param string $pathname The directory path.
     * @param bool $recursive Allows the creation of nested directories specified in the pathname.
     *
     * @return bool
     */
    public function createDirectory($pathname, $recursive);

    /**
     * Reads entire file into a string.
     * Wrapper for PHP {@link http://php.net/manual/en/function.file-get-contents.php file_get_contents()} function.
     *
     * @param string $fileName Name of the file to read.
     *
     * @return mixed The function returns the read data or FALSE on failure.
     */
    public function getFileContent($fileName);

    /**
     * Write a string to a file.
     * Wrapper for PHP {@link http://php.net/manual/en/function.file-put-contents.php file_put_contents()} function.
     *
     * @param string $fileName Path to the file where to write the data.
     * @param string $content  The data to write.
     *
     * @return int This function returns the number of bytes that were written to the file, or FALSE on failure.
     */
    public function setFileContent($fileName, $content);
}
