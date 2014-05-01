<?php

namespace mg\g7\hl7v2\v25\datatype {

	use mg\g7\hl7v2\v25\GenericField;

	define ( "V25_DT_DLN_COMPONENT_MAX", 3 );
	/**
	 * データ型:運転免許証番号
	 * JAHIS 臨床検査データ交換規約Ver3.0
	 * SEQ1 免許番号 LEN:20 DT:ST OPT:R
	 * SEQ2 発行州、省、国 LEN:20 DT:IS OPT:O
	 * SEQ3 失効日付 LEN:24 DT:DT OPT:O
	 *
	 * JAHIS 病名情報データ交換規約Ver2.0
	 * SEQ1 免許番号 LEN: DT:ST OPT:
	 * SEQ2 発行州、省、国 LEN: DT:IS OPT:
	 * SEQ3 失効日付 LEN: DT:DT OPT:
	 * 
	 *        
	 */
	class DLN extends GenericField {
		private $licenseNumber; // SEQ1 免許番号
		private $issuingStateProvinceCountry; // SEQ2 発行州、省、国
		private $expirationDate; // SEQ3 失効日付
		public function parse() {
			parent::validate ();
			$this->licenseNumber = $this->components [0];
			$this->issuingStateProvinceCountry = $this->components [1];
			$this->expirationDate = $this->components [2];
		}
		public function getLicenseNumber() {
			return $this->licenseNumber;
		}
		public function getIssuingStateProvinceCountry() {
			return $this->issuingStateProvinceCountry;
		}
		public function getExpirationDate() {
			return $this->expirationDate;
		}
	}
}