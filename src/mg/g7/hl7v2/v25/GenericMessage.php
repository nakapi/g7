<?php

namespace mg\g7\hl7v2\v25 {

	use mg\g7\Message;
	use mg\g7\SegmentsAggregate;
	use mg\g7\Exception;

	define ( "SEGMENT_REQUIRED", true );
	define ( "SEGMENT_NOT_REQUIRED", false );
	define ( "SEGMENT_SEPARATOR", "\r" );
	abstract class GenericMessage implements Message {
		protected $segments;
		private $fieldSeparator;
		private $encodingCharacter;
		public function parseSegment($msg) {
			$this->fieldSeparator = substr ( $msg, 3, 1 );
			$this->encodingCharacter = substr ( $msg, 4, 4 );
			$this->segments = new SegmentsAggregate ();
			$segmentRows = explode ( SEGMENT_SEPARATOR, $msg );
			$this->segments = $this->init ( $segmentRows, $this->structure );
			return $this->segments;
		}
		public function init(&$msg, $node) {
			$array = array ();
			$row = $msg [0];
			foreach ( $node as $key => $val ) {
				if (! $row) {
					break;
				}
				if (is_array ( $val )) {
					$arraySub = array ();
					while ( 1 ) {
						$ret = $this->init ( $msg, $val );
						if (count ( $ret ) === 0) {
							break;
						}
						$arraySub [] = $ret;
					}
					if (count ( $arraySub ) > 0) {
						$array [$key] = $arraySub;
					}
				} elseif (substr ( $row, 0, 3 ) === $key) {
					array_shift ( $msg );
					$segmentId = substr ( $row, 0, 3 );
					$segmentClass = __NAMESPACE__ . "\\segment\\" . $segmentId;
					if ($segmentId === "MSH") {
						$fields [0] = $segmentId;
						$fields [1] = $this->fieldSeparator;
						array_splice ( $fields, count ( $fields ), 0, explode ( self::getFieldSeparator (), substr ( $row, 4 ) ) );
						$obj = new $segmentClass ( $fields, $this->encodingCharacter );
					} else {
						$obj = new $segmentClass ( explode ( self::getFieldSeparator (), $row ), $this->encodingCharacter );
					}
					$obj->parse ();
					$validation = "validate" . $segmentId;
					$this->$validation ( $obj );
					$array [$key] = $obj;
				}
				$row = $msg [0];
			}
			return $array;
		}
		public function getFieldSeparator() {
			return $this->fieldSeparator;
		}
		public function genericValidate($obj, $option) {
			$field = $obj->getFields ();
			if (! $this->checkOption ( $option, $field )) {
				throw new Exception ( __CLASS__ . " FIELD OPTION NG" );
			}
		}
		public function checkOption($option, $items) {
			foreach ( $option as $key => $val ) {
				if ($val === SSMIX2_FIELD_OPTION_R) {
					$check = false;
					foreach ( $items [$key] as $num => $component ) {
						if (! $component->isEmpty ()) {
							$check = true;
							break;
						}
					}
					if (! $check) {
						echo __CLASS__ . "OPTION ERROR(" . $key . "):" . $component->toString () . "\n";
						return false;
					}
				} elseif ($val === SSMIX2_FIELD_OPTION_N) {
					$check = true;
					foreach ( $items [$key] as $num => $component ) {
						if (! $component->isEmpty ()) {
							$check = false;
							break;
						}
					}
					if (! $check) {
						echo __CLASS__ . "OPTION ERROR(" . $key . "):" . $component->toString () . "\n";
						return false;
					}
				}
			}
			return true;
		}
		public function getType($node, $msg, $required, $repeat) {
			$arrayObj = new \ArrayObject ();
			foreach ( $node as $key => $val ) {
				if ($msg === $key) {
					$arrayObj->append ( $val );
				}
			}
			if ($required && $arrayObj->count () === 0) {
				throw new Exception ( "SEGMENT REQUIRED:" . $msg );
			}
			if (! $repeat && $arrayObj->count () > 1) {
				throw new Exception ( "SEGMENT REPEAT ERROR:" . $msg );
			}
			return $arrayObj;
		}
	}
}