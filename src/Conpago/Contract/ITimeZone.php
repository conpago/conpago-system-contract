<?php
    /**
     * Created by PhpStorm.
     * User: bg
     * Date: 03.12.15
     * Time: 22:50
     */

    namespace Conpago\Contract;


    /**
     * Interface to manage timezone
     *
     * @package Conpago\Contract
     */
    interface ITimeZone
    {
        /**
         * Sets the default timezone used by all date/time functions in a script
         *
         * @param string $timezone_identifier
         * The timezone identifier, like UTC or
         * Europe/Lisbon. The list of valid identifiers is
         * available in the.
         *
         * @return bool This function returns false if the
         * timezone_identifier isn't valid, or true
         * otherwise.
         */
        function setDefaultTimeZone($timezone_identifier);
    }