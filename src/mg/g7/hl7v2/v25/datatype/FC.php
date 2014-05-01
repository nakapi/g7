<?php

namespace mg\g7\hl7v2\v25\datatype {

	use mg\g7\hl7v2\v25\GenericField;

	define ( "V25_DT_FC_COMPONENT_MAX", 2 );
	/**
	 * データ型:会計クラス
	 * JAHIS 臨床検査データ交換規約Ver3.0
	 * SEQ1 会計のクラス LEN:20 DT:IS OPT:R
	 * SEQ2 発行期限 LEN:26 DT:TS OPT:O
	 *
	 * JAHIS 病名情報データ交換規約Ver2.0
	 * SEQ1 会計のクラス LEN: DT:IS OPT:
	 * SEQ2 発行期日 LEN: DT:TS OPT:
	 * 
	 *        
	 */
	class FC extends GenericField {
		private $financialClassCode; // SEQ1 会計のクラス
		private $effectiveDate; // SEQ2 発行期限
		public function parse() {
			parent::validate ();
			$this->financialClassCode = $this->components [0];
			$this->effectiveDate = $this->components [1];
		}
		public function getFinancialClassCode() {
			return $this->financialClassCode;
		}
		public function getEffectiveDate() {
			return $this->effectiveDate;
		}
	}
}