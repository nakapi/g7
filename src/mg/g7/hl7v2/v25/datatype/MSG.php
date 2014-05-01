<?php

namespace mg\g7\hl7v2\v25\datatype {

	use mg\g7\hl7v2\v25\GenericField;

	define ( "V25_DT_MSG_COMPONENT_MAX", 3 );
	/**
	 * データ型:メッセージ
	 * JAHIS 臨床検査データ交換規約Ver3.0
	 * SEQ1 メッセージコード LEN:3 DT:ID OPT:R
	 * SEQ2 トリガイベント LEN:3 DT:ID OPT:R
	 * SEQ3 メッセージ構造 LEN:7 DT:ID OPT:R
	 *
	 * JAHIS 病名情報データ交換規約Ver2.0
	 * SEQ1 メッセージコード LEN: DT:ID OPT:
	 * SEQ2 トリガイベント LEN: DT:ID OPT:
	 * SEQ3 メッセージ構造 LEN: DT:ID OPT:
	 *        
	 */
	class MSG extends GenericField {
		private $messageCode;//SEQ1 メッセージコード
		private $triggerEvent;//SEQ2 トリガイベント
		private $messageStructure;//SEQ3 メッセージ構造
		public function parse() {
			parent::validate ();
			$this->messageCode = $this->components[0];
			$this->triggerEvent = $this->components[1];
			$this->messageStructure = $this->components[2];
		}
		public function getMessageCode(){
			return $this->messageCode;
		}
		public function getTriggerEvent(){
			return $this->triggerEvent;
		}
		public function getMessageStructure(){
			return $this->messageStructure;
		}
	}
}