<?php

namespace mg\g7\hl7v2\v25\segment {

	use mg\g7\hl7v2\v25\GenericSegment;
	use mg\g7\Exception;

	const V25_ZE2_FIELDS_NUM = 8;
	class ZE2 extends GenericSegment {
		public function __construct($fields, $encodingCharacter) {
			parent::__construct ( $fields, $encodingCharacter );
			$this->addField ( "ST", $fields [0], 3, false );
			$this->addField ( "SI", $fields [1], 4, false );
			$this->addField ( "CQ", $fields [2], 500, false );
			$this->addField ( "CQ", $fields [3], 500, false );
			$this->addField ( "CQ", $fields [4], 500, false );
			$this->addField ( "CQ", $fields [5], 500, false );
			$this->addField ( "NM", $fields [6], 16, false );
			$this->addField ( "ST", $fields [7], 199, true );
		}
		public function parse() {
			if (count ( $this->fields ) < V25_ZE2_FIELDS_NUM) {
				throw new Exception ( __CLASS__ . " FIELDS LACK :" . count ( $this->fields ) );
			}
			parent::_parse ();
		}
		// ZE2-0 セグメントID
		public function getSegmentId() {
			return $this->getField ( 0 );
		}
		// ZE2-1 セットID ZE2
		public function getSetIdZe2() {
			return $this->getField ( 1 );
		}
		// ZE2-2 管電圧
		public function getTubeVoltage() {
			return $this->getField ( 2 );
		}
		// ZE2-3 管電流
		public function getTubeCurrent() {
			return $this->getField ( 3 );
		}
		// ZE2-4 距離
		public function getDistance() {
			return $this->getField ( 4 );
		}
		// ZE2-5 時間
		public function getTime() {
			return $this->getField ( 5 );
		}
		// ZE2-6 回数
		public function getNumberOfExposure() {
			return $this->getField ( 6 );
		}
		// ZE2-7 撮影フィールド
		public function getExposureCommentField() {
			return $this->getField ( 7 );
		}
	}
}
