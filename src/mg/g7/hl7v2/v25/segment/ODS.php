<?php

namespace mg\g7\hl7v2\v25\segment {

	use mg\g7\hl7v2\v25\GenericSegment;
	use mg\g7\Exception;

	const V25_ODS_FIELDS_NUM = 5;
	class ODS extends GenericSegment {
		public function __construct($fields, $encodingCharacter) {
			parent::__construct ( $fields, $encodingCharacter );
			$this->addField ( "ST", $fields [0], 3,  false );
			$this->addField ( "ID", $fields [1], 1,  false );
			$this->addField ( "CWE", $fields [2], 250,  true );
			$this->addField ( "CWE", $fields [3], 540,  true );
			$this->addField ( "ST", $fields [4], 80,  true );
		}
		public function parse() {
			if (count ( $this->fields ) < V25_ODS_FIELDS_NUM) {
				throw new Exception ( __CLASS__ . " FIELDS LACK :" . count ( $this->fields ) );
			}
			parent::_parse ();
		}
		// ODS-0 セグメントID
		public function getSegmentId() {
			return $this->getField ( 0 );
		}
		// ODS-1 タイプ
		public function getType() {
			return $this->getField ( 1 );
		}
		// ODS-2 サービス時間帯
		public function getServicePeriod() {
			return $this->getField ( 2 );
		}
		// ODS-3 食事、補色、嗜好コード
		public function getDietSupplementOrPreferenceCode() {
			return $this->getField ( 3 );
		}
		// ODS-4 テキスト指示
		public function getTextInstruction() {
			return $this->getField ( 4 );
		}
	}
}
