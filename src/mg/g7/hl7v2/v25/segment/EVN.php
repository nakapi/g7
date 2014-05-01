<?php

namespace mg\g7\hl7v2\v25\segment {

	use mg\g7\hl7v2\v25\GenericSegment;
	use mg\g7\Exception;

	const V25_EVN_FIELDS_NUM = 8;
	/**
	 * MSHセグメント
	 * [SS-MIX2]
	 * EVN-0 セグメントID 「EVN」
	 * EVN-1 事象型コード -
	 * EVN-2 事象記録日時
	 * EVN-3 事象計画日時
	 * EVN-4 事象理由コード
	 * EVN-5 操作者ID
	 * EVN-6 事象発生日時
	 * EVN-7 事象施設
	 */
	class EVN extends GenericSegment {
		public function __construct($fields, $encodingCharacter) {
			parent::__construct ( $fields, $encodingCharacter );
			$this->addField ( "ST", $fields [0], 3,  false );
			$this->addField ( "ID", $fields [1], 3,  false );
			$this->addField ( "TS", $fields [2], 26,  false );
			$this->addField ( "TS", $fields [3], 26,  false );
			$this->addField ( "IS", $fields [4], 3,  false );
			$this->addField ( "XCN", $fields [5], 250,  true );
			$this->addField ( "TS", $fields [6], 26,  false );
			$this->addField ( "HD", $fields [7], 241,  false );
		}
		public function parse() {
			parent::_parse ();
		}
		// EVN-0 セグメントID
		public function getSegmentId() {
			return $this->getField ( 0 );
		}
		// -N-EVN-1 事象型コード
		public function getEventTypeCode() {
			return $this->getField ( 1 );
		}
		// EVN-2 事象記録日時
		public function getRecordedDate() {
			return $this->getField ( 2 );
		}
		// EVN-3 事象計画日時
		public function getDatePlannedEvent() {
			return $this->getField ( 3 );
		}
		// EVN-4 事象理由コード
		public function getEventReasonCode() {
			/**
			 * [SS-MIX2]
			 * 使用者定義表「0062-事象理由」
			 * 01 患者の要求
			 * 02 医者/医療提供者のオーダ
			 * 03 調査管理
			 * O その他
			 * U 不明
			 */
			return $this->getField ( 4 );
		}
		// EVN-5 操作者ID
		public function getOperatorId() {
			return $this->getField ( 5 );
		}
		// EVN-6 事象発生日時
		public function getEventOccurred() {
			return $this->getField ( 6 );
		}
		// EVN-7 事象施設
		public function getEventFacility() {
			return $this->getField ( 7 );
		}
	}
}
