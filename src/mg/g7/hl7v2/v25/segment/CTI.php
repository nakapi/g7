<?php

namespace mg\g7\hl7v2\v25\segment {

	use mg\g7\hl7v2\v25\GenericSegment;
	use mg\g7\Exception;

	const V25_CTI_FIELDS_NUM = 4;
	class CTI extends GenericSegment {
		public function __construct($fields, $encodingCharacter) {
			parent::__construct ( $fields, $encodingCharacter );
			$this->addField ( "ST", $fields [0], 3,  false );
			$this->addField ( "EI", $fields [1], 4,  false );
			$this->addField ( "CWE", $fields [2], 250,  false );
			$this->addField ( "CWE", $fields [3], 250,  false );
		}
		public function parse() {
			if (count ( $this->fields ) < V25_CTI_FIELDS_NUM) {
				throw new Exception ( __CLASS__ . " FIELDS LACK :" . count ( $this->fields ) );
			}
			parent::_parse ();
		}
		// CTI-0 セグメントID
		public function getSegmentId() {
			return $this->getField ( 0 );
		}
		// CTI-1 後援者試験識別子
		public function getSponsorStudyId() {
			return $this->getField ( 1 );
		}
		// CTI-2 試験相識別子
		public function getStudyPhaseIdentifier() {
			return $this->getField ( 2 );
		}
		// CTI-3 試験予定時間ポイント
		public function getStudyScheduledTimePoint() {
			return $this->getField ( 3 );
		}
	}
}
