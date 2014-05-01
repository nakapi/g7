<?php

namespace mg\g7\hl7v2\v25 {

	use mg\g7\Segment;
	use mg\g7\FieldsAggregate;
	use mg\g7\hl7v2\v25\datatype\XPN;
	use mg\g7\SegmentsAggregate;

	abstract class GenericSegment extends SegmentsAggregate implements Segment {
		protected $fields;
		protected $encodingCharacter;
		public function __construct($row, $encodingCharacter) {
			$this->fields = new FieldsAggregate ();
			$this->encodingCharacter = $encodingCharacter;
		}
		protected function _parse() {
			$iterator = $this->fields->getIterator ();
			while ( $iterator->valid () ) {
				$fieldIterator = $iterator->current ()->getIterator ();
				while ( $fieldIterator->valid () ) {
					$fieldIterator->current ()->parse ();
					$fieldIterator->next ();
				}
				$iterator->next ();
			}
		}
		public function addField($class, $str, $len, $repeat) {
			$array = new \ArrayObject ();
			if ($repeat) {
				$items = self::getListFields ( $str );
				foreach ( $items as $key => $val ) {
					$classpath = __NAMESPACE__ . "\\datatype\\" . $class;
					$fieldObj = new $classpath ( $val, $len, $this->encodingCharacter );
					$array->append ( $fieldObj );
				}
				$this->fields->add ( $array );
			} else {
				$classpath = __NAMESPACE__ . "\\datatype\\" . $class;
				$fieldObj = new $classpath ( $str, $len, $this->encodingCharacter );
				$array->append ( $fieldObj );
				$this->fields->add ( $array );
			}
		}
		public function getFields() {
			return $this->fields;
		}
		public function getField($num) {
			return $this->fields [$num];
		}
		public function getListFields($str) {
			return explode ( self::getFieldRepeatSeparator (), $str );
		}
		public function getFieldRepeatSeparator() {
			return substr ( $this->encodingCharacter, 1, 1 );
		}
	}
}