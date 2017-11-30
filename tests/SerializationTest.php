<?php

namespace Test\Wikimedia\Nonserializable;

use Wikimedia\Nonserializable\Nonserializable;
use Wikimedia\Nonserializable\NonserializableException;

/**
 * @group Nonserializable
 */
class SerializationTest extends \PHPUnit_Framework_TestCase {
	public function testSerialization() {
		$obj = new TestClass;
		serialize( $obj );
	}
}
