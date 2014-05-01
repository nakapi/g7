<?php

namespace mg\g7\hl7v2\v25\datatype {

	use mg\g7\hl7v2\v25\GenericField;

	define ( "V25_DT_TX_COMPONENT_MAX", 1 );
	/**
	 * データ型:文字列
	 * HL7 Ver2.5
	 * SEQ1 文字列データ LEN: DT: OPT:
	 *
	 *        
	 */
	class TX extends GenericField {
		private $text; // SEQ1 文字列データ
		public function parse() {
			parent::validate ();
			$this->text = $this->components [0];
		}
		public function getText() {
			return $this->text;
		}
	}
}