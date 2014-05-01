<?php

namespace mg\g7\hl7v2\v25\datatype {

	use mg\g7\hl7v2\v25\GenericField;

	define ( "V25_DT_DLD_COMPONENT_MAX", 2 );
	/**
	 * データ型:退院先と日付
	 * JAHIS 臨床検査データ交換規約Ver3.0
	 * SEQ1 退院先 LEN:20 DT:IS OPT:R
	 * SEQ2 発行日付 LEN:26 DT:TS OPT:O
	 *
	 * JAHIS 病名情報データ交換規約Ver2.0
	 * SEQ1 退院先 LEN: DT:IS OPT:
	 * SEQ2 発行日付 LEN: DT:TS OPT:
	 * 
	 *        
	 */
	class DLD extends GenericField {
		private $dischargeLocation; // SEQ1 退院先
		private $effectiveDate; // SEQ2 発行日付
		public function parse() {
			parent::validate ();
			$this->dischargeLocation = $this->components [0];
			$this->effectiveDate = $this->components [1];
		}
		public function getDischargeLocation() {
			return $this->dischargeLocation;
		}
		public function getEffectiveDate() {
			return $this->effectiveDate;
		}
	}
}