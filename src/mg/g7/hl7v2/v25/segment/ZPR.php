<?php

namespace mg\g7\hl7v2\v25\segment {

	use mg\g7\hl7v2\v25\GenericSegment;
	use mg\g7\Exception;

	const V25_ZPR_FIELDS_NUM = 8;
	class ZPR extends GenericSegment {
		public function __construct($fields, $encodingCharacter) {
			parent::__construct ( $fields, $encodingCharacter );
			$this->addField ( "ST", $fields [0], 3,  false );
			$this->addField ( "CWE", $fields [1], 250,  true );
			$this->addField ( "CWE", $fields [2], 250,  false );
			$this->addField ( "CWE", $fields [3], 250,  true );
			$this->addField ( "CWE", $fields [4], 250,  true );
			$this->addField ( "CWE", $fields [5], 250,  false );
			$this->addField ( "CWE", $fields [6], 250,  true );
			$this->addField ( "ST", $fields [7], 199,  false );
		}
		public function parse() {
			if (count ( $this->fields ) < V25_ZPR_FIELDS_NUM) {
				throw new Exception ( __CLASS__ . " FIELDS LACK :" . count ( $this->fields ) );
			}
			parent::_parse ();
		}
		// ZPR-0 セグメントID
		public function getSegmentId() {
			return $this->getField ( 0 );
		}
		// ZPR-1 修飾語管理番号（接頭語）
		public function getModifierCodePrefix() {
			return $this->getField ( 1 );
		}
		// ZPR-2 病名管理番号
		public function getDiseaseCode() {
			return $this->getField ( 2 );
		}
		// ZPR-3 修飾語管理番号（接尾語）
		public function getModifierCodeSuffix() {
			return $this->getField ( 3 );
		}
		// ZPR-4 修飾語交換用コード（接頭語）
		public function getModifierCodeForExchangePrefix() {
			return $this->getField ( 4 );
		}
		// ZPR-5 病名交換用コード
		public function getDiseaseCodeForExchange() {
			return $this->getField ( 5 );
		}
		// ZPR-6 修飾語交換用コード（接尾語）
		public function getModifierCodeForExchangeSuffix() {
			return $this->getField ( 6 );
		}
		// ZPR-7 コメント
		public function getComment() {
			return $this->getField ( 7 );
		}
	}
}
