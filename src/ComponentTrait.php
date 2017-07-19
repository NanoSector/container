<?php
/**
 * Copyright 2017 NanoSector
 *
 * You should have received a copy of the MIT license with the project.
 * See the LICENSE file for more information.
 */

namespace Yoshi2889\Container;

trait ComponentTrait
{
	/**
	 * @param ComponentContainer $container
	 *
	 * @return static
	 * @throws NotFoundException
	 */
	public static function fromContainer(ComponentContainer $container)
	{
		$obj = $container->get(__CLASS__);

		if ($obj && $obj instanceof static)
			return $obj;

		throw new NotFoundException();
	}
}