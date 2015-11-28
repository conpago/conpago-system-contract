<?php
	/**
	 * Created by PhpStorm.
	 * User: bg
	 * Date: 28.11.15
	 * Time: 13:10
	 */

	namespace Conpago\Config\Contract;


	interface IConfigBuilder {
		/**
		 * @return array
		 */
		function build();
	}