<?php

/**
 * Test: Nette\SmartObject reference to property (deprecated)
 */

use Tester\Assert;

require __DIR__ . '/../bootstrap.php';


class TestClass
{
	use Nette\SmartObject;

	private $foo;

	public function getFoo()
	{
		return $this->foo;
	}

	public function setFoo($foo)
	{
		$this->foo = $foo;
	}

}


$obj = new TestClass;
@$obj->foo = 'hello';
@$x = &$obj->foo;
$x = 'changed by reference';
Assert::same('hello', @$obj->foo);
