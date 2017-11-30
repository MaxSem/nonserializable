<?php

namespace Wikimedia\Nonserializable;

/**
 * Trait that prevents serialization/deserialization of classes using it
 */
trait Nonserializable {
	/**
	 * Block attempts to serialize()
	 */
	public function __sleep() {
		throw new NonserializableException( __CLASS__ );
	}

	/**
	 * Block attempts to unserialize()
	 */
	public function __wakeup() {
		throw new NonserializableException( __CLASS__ );
	}

	/**
	 * Block attempts to make classes using this trait JsonSerializable.
	 * Throws just in case.
	 */
	private function jsonSerialize() {
		throw new NonserializableException( __CLASS__ );
	}
}
