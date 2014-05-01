<?php

namespace mg\g7 {

	class ComponentsAggregate implements \ArrayAccess, \IteratorAggregate, \Countable {
		private $components;
		public 

		function __construct() {
			$this->components = new \ArrayObject ();
		}
		public function add($component) {
			$this->components [] = $component;
		}
		public function getIterator() {
			return $this->components->getIterator ();
		}
		public function count() {
			return count ( $this->components );
		}
		public function offsetExists($offset) {
			return isset ( $this->components [$offset] );
		}
		public function offsetGet($offset) {
			return $this->components [$offset];
		}
		public function offsetSet($offset, $value) {
			$this->components [$offset] = $value;
		}
		public function offsetUnset($offset) {
			unset ( $this->components [$offset] );
		}
	}
}