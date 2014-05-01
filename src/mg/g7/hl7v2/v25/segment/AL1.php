<?php

namespace mg\g7\hl7v2\v25\segment {

	use mg\g7\hl7v2\v25\GenericSegment;
	use mg\g7\Exception;

	const V25_AL1_FIELDS_NUM = 7;
	class AL1 extends GenericSegment {
		public function __construct($fields, $encodingCharacter) {
			parent::__construct ( $fields, $encodingCharacter );
			$this->addField ( "ST", $fields [0], 3,  false );
			$this->addField ( "SI", $fields [1], 4,  false );
			$this->addField ( "CWE", $fields [2], 250,  false );
			$this->addField ( "CWE", $fields [3], 250,  false );
			$this->addField ( "CWE", $fields [4], 250,  false );
			$this->addField ( "ST", $fields [5], 15,  true );
			$this->addField ( "DT", $fields [6], 8,  false );
		}
		public function parse() {
			if (count ( $this->fields ) < V25_AL1_FIELDS_NUM) {
				throw new Exception ( __CLASS__ . " FIELDS LACK :" . count ( $this->fields ) );
			}
			parent::_parse ();
		}
		// AL1-0 セグメントID
		public function getSegmentId() {
			return $this->getField ( 0 );
		}
		// AL1-1 セットID-AL1
		public function getSetIdAl1() {
			return $this->getField ( 1 );
		}
		// AL1-2 アレルゲン分類
		public function getAllergyType() {
			return $this->getField ( 2 );
		}
		// AL1-3 アレルゲン情報
		public function getAllergyCodeMnemonicDescription() {
			return $this->getField ( 3 );
		}
		// AL1-4 アレルギー重症度
		public function getAllergySeverity() {
			return $this->getField ( 4 );
		}
		// AL1-5 アレルギー反応情報
		public function getAllergyReaction() {
			return $this->getField ( 5 );
		}
		// AL1-6 判定日
		public function getIdentificationDate() {
			return $this->getField ( 6 );
		}
	}
}
