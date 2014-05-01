<?php

namespace mg\g7\hl7v2\v25\datatype {

	use mg\g7\hl7v2\v25\GenericField;

	define ( "V25_DT_VID_COMPONENT_MAX", 3 );
	/**
	 * データ型:バージョン識別子
	 * JAHIS 臨床検査データ交換規約Ver3.0
	 * SEQ1 バージョンID LEN:5 DT:ID OPT:O
	 * SEQ2 国際化コード LEN:705 DT:CWE OPT:O
	 * SEQ3 国際化バージョンID LEN:705 DT:CWE OPT:O
	 * 
	 * JAHIS 病名情報データ交換規約Ver2.0
	 * SEQ1 version ID(ID)
	 * SEQ2 internationalication code(CWE)
	 * SEQ3 international version ID(CWE)
	 *        
	 */
	class VID extends GenericField {
		private $versionId;//SEQ1 バージョンID
		private $internationalizationCode;//SEQ2 国際化コード
		private $internationalVersionId;//SEQ3 国際化バージョンID
		public function parse() {
			parent::validate ();
			$this->versionId = $this->components[0];
			$this->internationalizationCode = $this->components[1];
			$this->internationalVersionId = $this->components[2];
		}
		public function getVersionId(){
			return $this->versionId;
		}
		public function getInternationalizationCode(){
			return $this->internationalizationCode;
		}
		public function getInternationalVersionId(){
			return $this->internationalVersionId;
		}
	}
}