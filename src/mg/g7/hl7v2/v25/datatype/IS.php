<?php

namespace mg\g7\hl7v2\v25\datatype {

	use mg\g7\hl7v2\v25\GenericField;

	define ( "V25_DT_IS_COMPONENT_MAX", 1 );
	define ( "V25_DT_IS_LENGTH_MAX", 20 );
	/**
	 * データ型:使用者定義表コード化値
	 * JAHIS 臨床検査データ交換規約Ver3.0 COMPONENT:1 LEN:20
	 * LEN:20 DT: OPT:
	 *
	 * JAHIS 病名情報データ交換規約Ver2.0
	 * 使用者定義コード化値 LEN:20
	 * 
	 * HL7 Ver2.5
	 * 使用者定義コード化値 LEN:2 (PT:患者,GT:保証人,IN:被保険者,AP:関係者) 使用者定義表0334障害者参照
	 * 
	 *        
	 */
	class IS extends GenericField {
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