<?php

namespace mg\g7\hl7v2\v25\datatype {

	use mg\g7\hl7v2\v25\GenericField;

	define ( "V25_DT_CWE_COMPONENT_MAX", 9 );
	/**
	 * データ型:エンティティ識別子
	 * JAHIS 臨床検査データ交換規約Ver3.0
	 * SEQ1 エンティティ識別子 LEN:199 DT:ST OPT:O
	 * SEQ2 ネームスペースID LEN:20 DT:IS OPT:O
	 * SEQ3 汎用ID LEN:199 DT:ST OPT:C
	 * SEQ4 汎用ID型 LEN:6 DT:ID OPT:C
	 *
	 * JAHIS 病名情報データ交換規約Ver2.0
	 * SEQ1 エンティティ識別子 LEN: DT:ST OPT:
	 * SEQ2 ネームスペースID LEN: DT:IS OPT:
	 * SEQ3 汎用ID LEN: DT:ST OPT:
	 * SEQ4 汎用ID型 LEN: DT:ID OPT:
	 * 
	 *        
	 */
	class EI extends GenericField {
		private $entityIdentifier; // SEQ1 エンティティ識別子
		private $namespaceId; // SEQ2 ネームスペースID
		private $universalId; // SEQ3 汎用ID
		private $universalIdType; // SEQ4 汎用ID型
		public function parse() {
			parent::validate ();
			$this->entityIdentifier = $this->components [0];
			$this->namespaceId = $this->components [1];
			$this->universalId = $this->components [2];
			$this->universalIdType = $this->components [3];
		}
		public function getEntityIdentifier() {
			return $this->entityIdentifier;
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