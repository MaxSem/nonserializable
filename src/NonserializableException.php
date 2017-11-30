<?php

namespace Wikimedia\Nonserializable;

/**
 * Thrown on attempts to serialize/deserialize classes using Nonserializable
 */
class NonserializableException extends \Exception {
	/**
	 * @param string $className Class that was attemppted to be serialized/deserialized
	 */
	public function __construct( $className ) {
		parent::__construct( "$className is not serializable" );
	}
}
