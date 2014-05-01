<?php

namespace mg\g7\hl7v2\v25\datatype {

	use mg\g7\hl7v2\v25\GenericField;

	/**
	 * データ型:認定情報
	 * 未使用
	 * JAHIS 病名情報データ交換規約Ver2.0
	 * SEQ1 承認番号 LEN:30 DT:ST OPT:O
	 * SEQ2 日付 LEN:8 DT:DT OPT:O
	 * SEQ3 承認元 LEN:199 DT:ST OPT:O
	 * 
	 */
	class AUI extends GenericField {
		private $authorizationNumber; // SEQ1 承認番号
		private $date; // SEQ2 日付
		private $source; // SEQ3 承認元
		public function parse() {
			parent::validate ();
			$this->authorizationNumber = $this->components[0];
			$this->date = $this->components[1];
			$this->source = $this->components[2];
		}
		public function getAuthorizationNumber(){
			return $this->authorizationNumber;
		}
		public function getDate(){
			return $this->date;
		}
		public function getSource(){
			return $this->source;
		}
	}
}