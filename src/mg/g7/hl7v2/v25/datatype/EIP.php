<?php

namespace mg\g7\hl7v2\v25\datatype {

	use mg\g7\hl7v2\v25\GenericField;

	/**
	 * データ型:エンティティ識別子のペア
	 * JAHIS 病名情報データ交換規約Ver2.0
	 * SEQ1 依頼者割当識別子 LEN: DT:EI OPT:O
	 * SEQ2 実施者割当識別子 LEN: DT:EI OPT:O
	 * 
	 *        
	 */
	class EIP extends GenericField {
		private $placerAssignedIdentifier ; // SEQ1 依頼者割当識別子
		private $fillerAssignedIdentifier ; // SEQ2 実施者割当識別子

		public function parse() {
			parent::validate ();
			$this->placerAssignedIdentifier = $this->components[0];
			$this->fillerAssignedIdentifier = $this->components[1];
		}
		public function getPlacerAssignedIdentifier(){
			return $this->placerAssignedIdentifier;
		}
		public function getFillerAssignedIdentifier(){
			return $this->fillerAssignedIdentifier;
		}
	}
}
