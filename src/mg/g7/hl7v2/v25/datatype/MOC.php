<?php

namespace mg\g7\hl7v2\v25\datatype {

	use mg\g7\hl7v2\v25\GenericField;

	define ( "V25_DT_MOC_COMPONENT_MAX", 2 );
	/**
	 * データ型:金額およびチャージコード
	 * JAHIS 臨床検査データ交換規約Ver3.0
	 * SEQ1 金額 LEN: DT:MO OPT:
	 * SEQ2 請求コード LEN: DT:CWE OPT:
	 */
	class MOC extends GenericField {
		private $monetaryAmount; // SEQ1 金額
		private $chargeCode; // SEQ2 請求コード
		public function parse() {
			parent::validate ();
			$this->monetaryAmount = $this->components [0];
			$this->chargeCode = $this->components [1];
		}
		public function getMonetaryAmount() {
			return $this->monetaryAmount;
		}
		public function getChargeCode() {
			return $this->chargeCode;
		}
	}
}
