<?php

namespace mg\g7\hl7v2\v25\segment {

	use mg\g7\hl7v2\v25\GenericSegment;
	use mg\g7\Exception;

	const V25_DB1_FIELDS_NUM = 9;
	class DB1 extends GenericSegment {
		public function __construct($fields, $encodingCharacter) {
			parent::__construct ( $fields, $encodingCharacter );
			$this->addField ( "ST", $fields [0], 3,  false );
			$this->addField ( "SI", $fields [1], 4,  false );
			$this->addField ( "IS", $fields [2], 2,  false );
			$this->addField ( "CX", $fields [3], 250,  true );
			$this->addField ( "ID", $fields [4], 1,  false );
			$this->addField ( "DT", $fields [5], 8,  false );
			$this->addField ( "DT", $fields [6], 8,  false );
			$this->addField ( "DT", $fields [7], 8,  false );
			$this->addField ( "DT", $fields [8], 8,  false );
		}
		public function parse() {
			if (count ( $this->fields ) < V25_DB1_FIELDS_NUM) {
				throw new Exception ( __CLASS__ . " FIELDS LACK :" . count ( $this->fields ) );
			}
			parent::_parse ();
		}
		// DB1-0 セグメントID
		public function getSegmentId() {
			return $this->getField ( 0 );
		}
		// DB1-1 セットID-DB1
		public function getSetIdDb1() {
			return $this->getField ( 1 );
		}
		// DB1-2 身体障害情報
		public function getDisabledPersonCode() {
			return $this->getField ( 2 );
		}
		// DB1-3 身体障害者ID
		public function getDisabledPersonIdentifier() {
			return $this->getField ( 3 );
		}
		// DB1-4 身体障害の有無
		public function getDisabledIndicator() {
			return $this->getField ( 4 );
		}
		// DB1-5 身体障害発生日
		public function getDisabilityStartDate() {
			return $this->getField ( 5 );
		}
		// DB1-6 身体障害回復日
		public function getDisabilityEndDate() {
			return $this->getField ( 6 );
		}
		// DB1-7 職場復帰日
		public function getDisabilityReturnToWorkDate() {
			return $this->getField ( 7 );
		}
		// DB1-8 職場離脱期間
		public function getDisabilityUnableToWorkDate() {
			return $this->getField ( 8 );
		}
	}
}
