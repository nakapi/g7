<?php

namespace mg\g7\hl7v2\v25 {

	use mg\g7\Field;
	use mg\g7\Exception;
	use mg\g7\ComponentsAggregate;

	abstract class GenericField implements Field {
		protected $length;
		protected $fieldStr;
		protected $encodingCharacter;
		protected $components;
		public function __construct($field, $length, $encodingCharacter) {
			$this->fieldStr = $field;
			$this->length = $length;
			$this->components = new ComponentsAggregate ();
			$this->encodingCharacter = $encodingCharacter;
			// ENCODING CHARACTER 
			if( $this->fieldStr !== $encodingCharacter )
			{
				$components = explode ( self::getComponentSeparator (), $this->fieldStr );
			}else{
				$components = array($this->fieldStr);
			}
			foreach ( $components as $key => $val ) {
				$this->components->add ( $val );
			}
		}
		public function validate() {
			if (isset ( $this->fieldStr ) && mb_strlen ( $this->fieldStr ) > $this->length) {
				throw new Exception ( "FIELD LENGTH(".$this->length.") ERROR:" . $this->fieldStr."(".mb_strlen($this->fieldStr).")" );
			}
		}
		private function getComponentSeparator() {
			return substr ( $this->encodingCharacter, 0, 1 );
		}
		public function isEmpty() {
			return (mb_strlen($this->fieldStr) === 0) ? true:false;
		}
		public function toString() {
			return $this->fieldStr;
		}
	}
}