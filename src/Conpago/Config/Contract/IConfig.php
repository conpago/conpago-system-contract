<?php
	/**
	 * Created by PhpStorm.
	 * User: Bartosz Gołek
	 * Date: 2014-06-09
	 * Time: 00:00
	 */

	namespace Conpago\Config\Contract;

	/**
	 * Interface that represents access to key/value configuration data.
	 *
	 * @package Conpago\Config\Contract
	 */
	interface IConfig
	{
		/**
		 * @param string $key Key to identify value
		 *
		 * @return mixed Value identified by key
		 */
		function getValue($key);

		/**
		 * @param string $key Key to identify value
		 *
		 * @return bool This function returns false if the
		 * key isn't exists in configuration, or true
		 * otherwise.
		 */
		function hasValue($key);
	}
