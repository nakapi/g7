<?php

namespace mg\g7\hl7v2\v25\datatype {

	use mg\g7\hl7v2\v25\GenericField;

	define ( "V25_DT_SI_COMPONENT_MAX", 1 );
	define ( "V25_DT_SI_LENGTH_MAX", 4 );
	/**
	 * データ型:シーケンスID
	 * JAHIS 臨床検査データ交換規約Ver3.0 COMPONENT:1 LEN:4
	 * SEQ1 シーケンスID LEN:4 DT: OPT:
	 *
	 * JAHIS 病名情報データ交換規約Ver2.0
	 * シーケンスID LEN:4
	 *
	 * HL7 Ver2.5
	 * シーケンス番号 LEN:4
	 * 
	 *        
	 */
	class SI extends GenericField {
		private $sequenceId; // SEQ1 シーケンスiD
		public function parse() {
			parent::validate ();
			$this->sequenceId = $this->components [0];
		}
		public function getSequenceId() {
			return $this->sequenceId;
		}
	}
}