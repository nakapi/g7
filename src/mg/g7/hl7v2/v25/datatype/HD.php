<?php

namespace mg\g7\hl7v2\v25\datatype {

	use mg\g7\hl7v2\v25\GenericField;

	define ( "V25_DT_HD_COMPONENT_MAX", 3 );
	/**
	 * データ型:階層的指定子
	 * JAHIS 臨床検査データ交換規約Ver3.0
	 * SEQ1: ネームスペースID LEN:20 DT:IS OPT:O
	 * SEQ2: 汎用ID LEN:199 DT:ST OPT:C
	 * SEQ3: 汎用ID型 LEN:6 DT:ID OPT:C
	 * 
	 * JAHIS 病名情報データ交換規約Ver2.0
	 * SEQ1: ネームスペースID LEN: DT:IS OPT:
	 * SEQ2: 汎用ID LEN: DT:ST OPT:
	 * SEQ3: 汎用ID型 LEN: DT:ID OPT:
	 *
	 *        
	 */
	class HD extends GenericField {
		private $namespaceId; // SEQ1 ネームスペースID
		private $universalId; // SEQ2 汎用ID
		private $universalIdType; // SEQ3 汎用ID型
		public function parse() {
			parent::validate ();
			$this->namespaceId = $this->components [0]; // SEQ1 ネームスペースID
			$this->universalId = $this->components [1]; // SEQ2 汎用ID
			$this->universalIdType = $this->components [2]; // SEQ3 汎用ID型
		}
		public function getNamespaceId() {
			return $this->namespaceId;
		}
		public function getUniversalId() {
			return $this->universalId;
		}
		public function getUniversalIdType() {
			return $this->universalIdType;
		}
	}
}