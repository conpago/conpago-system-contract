<?php
	/**
	 * Created by PhpStorm.
	 * User: Bartosz Gołek
	 * Date: 2014-06-10
	 * Time: 20:19
	 */

	namespace Conpago\Contract;

	use DateTime;

	/**
	 * Interface represents access to system time.
	 *
	 * @package Conpago\Contract
	 */
	interface ITimeService
	{
		/**
		 * @return DateTime This function returns current system DateTime.
		 */
		function getCurrentTime();
	}
