<?php

namespace mg\g7\hl7v2\v25\datatype {

	use mg\g7\hl7v2\v25\GenericField;

	define ( "V25_DT_ID_COMPONENT_MAX", 1 );
	/**
	 * データ型:HL7定義表コード化値
	 * JAHIS 臨床検査データ交換規約Ver3.0
	 * 使用者定義表のコード化された値
	 *
	 * JAHIS 病名情報データ交換規約Ver2.0
	 * HL7定義コード化値 LEN:Variable
	 *
	 * HL7 Ver2.5
	 * HL7定義コード化値 LEN:1
	 * 
	 *        
	 */
	class ID extends GenericField {
		private $codedValueForUserDefinedTables; // 使用者定義表のコード化された値
		public function parse() {
			parent::validate ();
			$this->codedValueForUserDefinedTables = $this->components [0];
		}
		public function getCodedValueForUserDefinedTables() {
			return $this->codedValueForUserDefinedTables;
		}
	}
}