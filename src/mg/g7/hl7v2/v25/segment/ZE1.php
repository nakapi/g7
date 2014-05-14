<?php

namespace mg\g7\hl7v2\v25\segment {

	use mg\g7\hl7v2\v25\GenericSegment;
	use mg\g7\Exception;

	const V25_ZE1_FIELDS_NUM = 13;
	class ZE1 extends GenericSegment {
		public function __construct($fields, $encodingCharacter) {
			parent::__construct ( $fields, $encodingCharacter );
			$this->addField ( "ST", $fields [0], 3, false );
			$this->addField ( "SI", $fields [1], 4, false );
			$this->addField ( "IS", $fields [2], 20, false );
			$this->addField ( "CWE", $fields [3], 483, false );
			$this->addField ( "NM", $fields [4], 16, false );
			$this->addField ( "CWE", $fields [5], 483, false );
			$this->addField ( "JCC", $fields [6], 292, false );
			$this->addField ( "XCN", $fields [7], 3002, true );
			$this->addField ( "IS", $fields [8], 20, false );
			$this->addField ( "ZRD", $fields [9], 250, true );
			$this->addField ( "XTN", $fields [10], 850, false );
			$this->addField ( "ST", $fields [11], 199, false );
			$this->addField ( "ST", $fields [12], 199, false );
		}
		public function parse() {
			if (count ( $this->fields ) < V25_ZE1_FIELDS_NUM) {
				throw new Exception ( __CLASS__ . " FIELDS LACK :" . count ( $this->fields ) );
			}
			parent::_parse ();
		}
		// ZE1-0 セグメントID
		public function getSegmentId() {
			return $this->getField ( 0 );
		}
		// ZE1-1 セットID ZE1
		public function getSetIdZe1() {
			return $this->getField ( 1 );
		}
		// ZE1-2 制御コード 予定／実施
		public function getControlCode() {
			return $this->getField ( 2 );
		}
		// ZE1-3 手技
		public function getProcedure() {
			return $this->getField ( 3 );
		}
		// ZE1-4 手技回数
		public function getNumberOfProcedure() {
			return $this->getField ( 4 );
		}
		// ZE1-5 医事加算
		public function getBillingInformation() {
			return $this->getField ( 5 );
		}
		// ZE1-6 医療従事者種別
		public function getHealthcarePractitionerCategory() {
			return $this->getField ( 6 );
		}
		// ZE1-7 医療従事者
		public function getHealthcarePractitioner() {
			return $this->getField ( 7 );
		}
		// ZE1-8 使用物品種別
		public function getMaterialCategory() {
			return $this->getField ( 8 );
		}
		// ZE1-9 使用物品
		public function getMaterialUsed() {
			return $this->getField ( 9 );
		}
		// ZE1-10 連絡先
		public function getContactInformation() {
			return $this->getField ( 10 );
		}
		// ZE1-11 実施フィールド
		public function getPerformedCommentField() {
			return $this->getField ( 11 );
		}
		// ZE1-12 実施フィールド
		public function getBillingCommentField() {
			return $this->getField ( 12 );
		}
	}
}
