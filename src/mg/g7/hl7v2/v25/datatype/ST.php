<?php

namespace mg\g7\hl7v2\v25\datatype {

	use mg\g7\hl7v2\v25\GenericField;

	define ( "V25_DT_ST_COMPONENT_MAX", 1 );
	define ( "V25_DT_ST_LENGTH_MAX", 199 );
	/**
	 * データ型:文字列
	 * JAHIS 臨床検査データ交換規約Ver3.0 COMPONENT:1 LEN:199
	 * SEQ1 文字列データ LEN:199 DT: OPT:
	 *
	 * JAHIS 病名情報データ交換規約Ver2.0
	 * 文字列データ LEN:199
	 *
	 * * HL7 Ver2.5
	 * 文字列データ LEN:199 英数
	 *
	 *        
	 */
	class ST extends GenericField {
		private $stringData; // SEQ1 文字列データ
		public function parse() {
			parent::validate ();
			$this->stringData = $this->components [0];
		}
		public function getStringData() {
			return $this->stringData;
		}
	}
}