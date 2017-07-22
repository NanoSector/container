# PSR-11 Object container
[![Build Status](https://scrutinizer-ci.com/g/Yoshi2889/container/badges/build.png)](https://scrutinizer-ci.com/g/Yoshi2889/container/build-status/master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/Yoshi2889/container/badges/quality-score.png)](https://scrutinizer-ci.com/g/Yoshi2889/container/?branch=master)
[![Scrutinizer Code Coverage](https://scrutinizer-ci.com/g/Yoshi2889/container/badges/coverage.png)](https://scrutinizer-ci.com/g/Yoshi2889/container/code-structure/master/code-coverage)
[![Latest Stable Version](https://poser.pugx.org/yoshi2889/container/v/stable)](https://packagist.org/packages/yoshi2889/container)
[![Latest Unstable Version](https://poser.pugx.org/yoshi2889/container/v/unstable)](https://packagist.org/packages/yoshi2889/container)
[![Total Downloads](https://poser.pugx.org/yoshi2889/container/downloads)](https://packagist.org/packages/yoshi2889/container)

Simple PSR-11 Container implementation for storing object instances.

## Installation
You can install this class via `composer`:

```composer require yoshi2889/container```

## Usage
First, instantiate a new ComponentContainer. This is the object which will keep references to the components you put in it.

For any class that may be added to the ComponentContainer, it must implement the `ComponentInterface`. 
Optionally, the `ComponentTrait` trait may be used to provide a ready-to-use means to implement the `ComponentInterface`.

After adding an instance to the container, it may be retrieved either by using the `get` method on the container 
while providing the full class name, or, more conveniently, via the static `fromContainer` method on the component.

An example of proper usage:

```php
<?php

class ExampleClass implements \Yoshi2889\Container\ComponentInterface
{
	use \Yoshi2889\Container\ComponentTrait;
	
	public function test()
	{
		echo 'Hello world!';
	}
}

$componentContainer = new \Yoshi2889\Container\ComponentContainer();
$exampleClassInstance = new ExampleClass();

$componentContainer->add($exampleClassInstance);

// echoes 'Hello world!'
ExampleClass::fromContainer($componentContainer)->test();
```

## License
This code is released under the MIT License. Please see `LICENSE` to read it.