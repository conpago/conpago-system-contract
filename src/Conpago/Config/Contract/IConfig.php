<?php
	/**
	 * Created by PhpStorm.
	 * User: Bartosz Gołek
	 * Date: 2014-06-09
	 * Time: 00:00
	 */

	namespace Conpago\Config\Contract;

	interface IConfig
	{
		/**
		 * @param $path
		 *
		 * @return mixed
		 */
		function getValue($path);

		/**
		 * @param $path
		 *
		 * @return bool
		 */
		function hasValue($path);
	}
