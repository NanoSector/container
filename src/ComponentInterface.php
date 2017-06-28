<?php
/**
 * Copyright 2017 NanoSector
 *
 * You should have received a copy of the MIT license with the project.
 * See the LICENSE file for more information.
 */

namespace Yoshi2889\Container;


interface ComponentInterface
{
	/**
	 * @param ComponentContainer $container
	 *
	 * @return null|object
	 */
	public static function fromContainer(ComponentContainer $container);
}