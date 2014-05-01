<?php

namespace mg\g7\hl7v2\v25\datatype {

	use mg\g7\hl7v2\v25\GenericField;

	define ( "V25_DT_JCC_COMPONENT_MAX", 3 );
	/**
	 * データ型:職種コード/種類
	 * JAHIS 臨床検査データ交換規約Ver3.0
	 * SEQ1 職コード LEN:20 DT:IS OPT:O
	 * SEQ2 職クラス LEN:20 DT:IS OPT:O
	 * SEQ3 職を記述するテキスト LEN:250 DT:TX OPT:O
	 *
	 * JAHIS 病名情報データ交換規約
	 * SEQ1 職コード LEN: DT:IS OPT:
	 * SEQ2 職クラス LEN: DT:IS OPT:
	 *        
	 */
	class JCC extends GenericField {
		private $jobCode; // SEQ1 職コード
		private $jobClass; // SEQ2 職クラス
		private $jobDescriptionText; // SEQ3 職を記述するテキスト
		public function parse() {
			parent::validate ();
		}
		public function getJobCode(){
			return $this->jobCode;
		}
		public function getJobClass(){
			return $this->jobClass;
		}
		public function getJobDescriptionText(){
			return $this->jobDescriptionText;
		}
	}
}