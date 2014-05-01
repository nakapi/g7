<?php

namespace mg\g7\hl7v2\v25\datatype {

	use mg\g7\hl7v2\v25\GenericField;

	define ( "V25_DT_PT_COMPONENT_MAX", 2 );
	/**
	 * データ型:処理型
	 * JAHIS 臨床検査データ交換規約Ver3.0
	 * SEQ1 処理ID LEN:1 DT:ID OPT:O
	 * SEQ2 処理モード LEN:1 DT:ID OPT:O
	 *
	 * JAHIS 病名情報データ交換規約Ver2.0
	 * SEQ1 処理ID LEN: DT:ID OPT:
	 * SEQ2 処理モード LEN: DT:ID OPT: 
	 * 
	 *        
	 */
	class PT extends GenericField {
		private $processingId; // SEQ1 処理ID
		private $processingMode; // SEQ2 処理モード
		public function parse() {
			parent::validate ();
			$this->processingId = $this->components [0];
			$this->processingMode = $this->components [1];
		}
		/**
		 *
		 * @return D:デバッグ P:本系 T:練習
		 */
		public function getProcessingId() {
			return $this->processingId;
		}
		/**
		 *
		 * @return A:記録 R:記録からの復帰 I:初期導入 T:現在処理中 Not present:提示されない
		 */
		public function getProcessingMode() {
			return $this->processingMode;
		}
	}
}