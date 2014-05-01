<?php

namespace mg\g7\hl7v2\v25\datatype {

	use mg\g7\hl7v2\v25\GenericField;
use mg\g7\Exception;
	
	define ( "V25_DT_TS_COMPONENT_MAX", 2 );
	/**
	 * データ型:数値
	 * JAHIS 臨床検査データ交換規約Ver3.0
	 * SEQ1 数値 LEN:16 DT: OPT:
	 * 
	 * JAHIS 病名情報データ交換規約Ver2.0
	 * SEQ1 数値 LEN: DT: OPT:
	 *        
	 */
	class NM extends GenericField {
		private $numeric;//SEQ1 数値
		public function parse() {
			parent::validate ();
			if( isset($this->compoents[0])&& !is_numeric($this->components[0])){
				throw new Exception("NM DATATYPE FORMAT ERROR:".$this->components[0]);
			}
			$this->numeric = $this->components[0];
		}
		public function getNumeric(){
			return $this->numeric;
		}
	}
}