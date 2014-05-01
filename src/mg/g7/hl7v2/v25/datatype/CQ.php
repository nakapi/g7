<?php

namespace mg\g7\hl7v2\v25\datatype {

	use mg\g7\hl7v2\v25\GenericField;

	define ( "V25_DT_CQ_COMPONENT_MAX", 2 );
	/**
	 * データ型:単位付き複合数量
	 * HL7 Ver2.5 
	 * SUBSEQ1 量 LEN:16 DT:NM OPT:O
	 * SUBSEQ2 単位 LEN:483 DT:CE OPT:O
	 *
	 *        
	 */
	class CQ extends GenericField {
		private $quantity; //SEQ1 量
		private $units; //SEQ2 単位
		public function parse() {
			parent::validate ();
			$this->quantity = $this->components[0];
			$this->units = $this->components[1];
		}
		public function getQuantity(){
			return $this->quantity;
		}
		public function getUnits(){
			return $this->units;
		}
	}
}