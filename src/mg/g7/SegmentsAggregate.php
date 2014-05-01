<?php

namespace mg\g7 {

	class SegmentsAggregate implements \ArrayAccess, \IteratorAggregate, \Countable {
		private $segments;
		public function __construct() {
			$this->segments = new \ArrayObject();
		}
		public function add($segment) {
			$this->segments[] = $segment;
		}
		public function getIterator() {
			return $this->segments->getIterator();
		}
		public function count() {
			return count ( $this->segments );
		}
		public function offsetExists($offset) {
			return isset ( $this->segments [$offset] );
		}
		public function offsetGet($offset) {
			return $this->segments [$offset];
		}
		public function offsetSet($offset, $value) {
			$this->segments [$offset] = $value;
		}
		public function offsetUnset($offset) {
			unset ( $this->segments [$offset] );
		}
	}
}