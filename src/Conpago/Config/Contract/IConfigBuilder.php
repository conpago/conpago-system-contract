<?php
	/**
	 * Created by PhpStorm.
	 * User: bg
	 * Date: 28.11.15
	 * Time: 13:10
	 */

	namespace Conpago\Config\Contract;


	/**
	 * Interface represents configuration class factory.
	 *
	 * @package Conpago\Config\Contract
	 */
	interface IConfigBuilder {
		/**
		 * builds configuration associative array.
		 *
		 * @return array This function returns associative configuration array
		 */
		function build();
	}