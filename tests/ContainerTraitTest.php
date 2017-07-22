<?php
/**
 * Copyright 2017 NanoSector
 *
 * You should have received a copy of the MIT license with the project.
 * See the LICENSE file for more information.
 */

namespace Yoshi2889\Container\Tests;

use PHPUnit\Framework\TestCase;
use Yoshi2889\Container\ComponentContainer;

class ContainerTraitTest extends TestCase
{
	public function testGetSetContainerWithTrait()
	{
		$container = new ComponentContainer();

		$class = new SampleContainerTraitClass();
		$class->setContainer($container);

		self::assertSame($container, $class->getContainer());
	}
}
