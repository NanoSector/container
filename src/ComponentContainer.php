<?php
/**
 * Copyright 2017 NanoSector
 *
 * You should have received a copy of the MIT license with the project.
 * See the LICENSE file for more information.
 */

namespace Yoshi2889\Container;

use Psr\Container\ContainerInterface;

class ComponentContainer implements ContainerInterface
{
	/**
	 * @var object[]
	 */
	protected $storedComponents = [];

	/**
	 * @param object $object
	 *
	 * @throws ContainerException
	 */
	public function add(object $object)
	{
		if (!($object instanceof ComponentInterface))
			throw new ContainerException('Object must implement Yoshi2889\Container\ComponentInterface');

		$this->storedComponents[get_class($object)] = $object;
	}

	/**
	 * @inheritdoc
	 */
	public function get($id)
	{
		if (!is_string($id))
			throw new ContainerException('Given ID must be a string');

		if (!$this->has($id))
			throw new NotFoundException();

		return $this->storedComponents[$id];
	}

	/**
	 * @inheritdoc
	 */
	public function has($id)
	{
		if (!is_string($id))
			throw new ContainerException('Given ID must be a string');

		return array_key_exists($id, $this->storedComponents);
	}
}