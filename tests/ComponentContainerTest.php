<?php
/**
 * Copyright 2017 NanoSector
 *
 * You should have received a copy of the MIT license with the project.
 * See the LICENSE file for more information.
 */

use Yoshi2889\Container\ComponentContainer;
use PHPUnit\Framework\TestCase;

class ComponentContainerTest extends TestCase
{
	public function testContainerGet()
	{
		$container = new ComponentContainer();

		$sampleComponent = new \Yoshi2889\Container\Tests\SampleComponent();
		$container->add($sampleComponent);

		$sampleComponentFromContainer = \Yoshi2889\Container\Tests\SampleComponent::fromContainer($container);

		self::assertInstanceOf(\Yoshi2889\Container\Tests\SampleComponent::class, $sampleComponentFromContainer);
		self::assertEquals($sampleComponent, $sampleComponentFromContainer);

		$this->expectException(\Yoshi2889\Container\NotFoundException::class);
		$container->get(\Yoshi2889\Container\Tests\SampleInvalidComponent::class);

		$this->expectException(\Yoshi2889\Container\ContainerException::class);
		$container->get(10);

		$emptyContainer = new ComponentContainer();
		self::assertNull(\Yoshi2889\Container\Tests\SampleComponent::fromContainer($emptyContainer));
	}

	public function testContainerHas()
	{
		$container = new ComponentContainer();

		self::assertFalse($container->has(\Yoshi2889\Container\Tests\SampleComponent::class));

		$sampleComponent = new \Yoshi2889\Container\Tests\SampleComponent();
		$container->add($sampleComponent);

		self::assertTrue($container->has(\Yoshi2889\Container\Tests\SampleComponent::class));

		$this->expectException(\Yoshi2889\Container\ContainerException::class);
		$container->has(10);
	}
}
