<?php

namespace mg\g7 {

	class FieldsAggregate implements \ArrayAccess, \IteratorAggregate, \Countable {
		private $fields;
		public function __construct() {
			$this->fields = new \ArrayObject ();
		}
		public function add($field) {
			$this->fields [] = $field;
		}
		public function getIterator() {
			return $this->fields->getIterator ();
		}
		public function count() {
			return count ( $this->fields );
		}
		public function offsetExists($offset) {
			return isset ( $this->fields [$offset] );
		}
		public function offsetGet($offset) {
			return $this->fields [$offset];
		}
		public function offsetSet($offset, $value) {
			$this->fields [$offset] = $value;
		}
		public function offsetUnset($offset) {
			unset ( $this->fields [$offset] );
		}
	}
}