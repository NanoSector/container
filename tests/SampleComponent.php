<?php
/**
 * Copyright 2017 NanoSector
 *
 * You should have received a copy of the MIT license with the project.
 * See the LICENSE file for more information.
 */

namespace Yoshi2889\Container\Tests;

use Yoshi2889\Container\ComponentInterface;
use Yoshi2889\Container\ComponentTrait;

class SampleComponent implements ComponentInterface
{
	use ComponentTrait;
}