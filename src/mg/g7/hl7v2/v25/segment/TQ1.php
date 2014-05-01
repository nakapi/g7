<?php

namespace mg\g7\hl7v2\v25\segment {

	use mg\g7\hl7v2\v25\GenericSegment;
	use mg\g7\Exception;

	const V25_TQ1_FIELDS_NUM = 15;
	class TQ1 extends GenericSegment {
		public function __construct($fields, $encodingCharacter) {
			parent::__construct ( $fields, $encodingCharacter );
			$this->addField ( "ST", $fields [0], 3,  false );
			$this->addField ( "SI", $fields [1], 4,  false );
			$this->addField ( "CQ", $fields [2], 20,  false );
			$this->addField ( "RPT", $fields [3], 540,  true );
			$this->addField ( "TM", $fields [4], 20,  true );
			$this->addField ( "CQ", $fields [5], 20,  true );
			$this->addField ( "CQ", $fields [6], 20,  false );
			$this->addField ( "TS", $fields [7], 26 ,  false );
			$this->addField ( "TS", $fields [8], 26 ,  false );
			$this->addField ( "CWE", $fields [9], 250 ,  true );
			$this->addField ( "TX", $fields [10], 250 ,  false );
			$this->addField ( "TX", $fields [11], 250 ,  false );
			$this->addField ( "ID", $fields [12], 10 ,  false );
			$this->addField ( "CQ", $fields [13], 20 ,  false );
			$this->addField ( "NM", $fields [14], 10 ,  false );
		}
		public function parse() {
			if (count ( $this->fields ) < V25_TQ1_FIELDS_NUM) {
				throw new Exception ( __CLASS__ . " FIELDS LACK :" . count ( $this->fields ) );
			}
			parent::_parse ();
		}
		// TQ1-0 セグメントID
		public function getSegmentId() {
			return $this->getField ( 0 );
		}
		// TQ1-1 セットID TQ1
		public function getSetIdTq1() {
			return $this->getField ( 1 );
		}
		// TQ1-2 数量
		public function getQuantity() {
			return $this->getField ( 2 );
		}
		// TQ1-3 繰返しパターン
		public function getRepeatPattern() {
			return $this->getField ( 3 );
		}
		// TQ1-4 明示的な時間
		public function getExplicitTime() {
			return $this->getField ( 4 );
		}
		// TQ1-5 早退時間/単位
		public function getRelativeTimeAndUnits () {
			return $this->getField ( 5 );
		}
		// TQ1-6 サービス期間
		public function getServiceDuration() {
			return $this->getField ( 6 );
		}
		// TQ1-7 開始日時
		public function getStartTime() {
			return $this->getField ( 7 );
		}
		// TQ1-8 終了日時
		public function getEndTime() {
			return $this->getField ( 8 );
		}
		// TQ1-9 優先度
		public function getPriority() {
			return $this->getField ( 9 );
		}
		// TQ1-10 条件テキスト
		public function getConditionText() {
			return $this->getField ( 10 );
		}
		// TQ1-11 テキスト指令
		public function getTextInstruction() {
			return $this->getField ( 11 );
		}
		// TQ1-12 連結
		public function getConjunction() {
			return $this->getField ( 12 );
		}
		// TQ1-13 事象継続期間
		public function getOccurrenceDuration() {
			return $this->getField ( 13 );
		}
		// TQ1-14 事象総数
		public function getTotalOccurrences() {
			return $this->getField ( 14 );
		}
	}
}
