<?php
/**
 * Copyright 2017 NanoSector
 *
 * You should have received a copy of the MIT license with the project.
 * See the LICENSE file for more information.
 */

namespace Yoshi2889\Container;


use Psr\Container\ContainerInterface;

interface ComponentInterface
{
	/**
	 * @param ContainerInterface $container
	 *
	 * @return null|object
	 */
	public static function fromContainer(ContainerInterface $container);
}