<?php

namespace mg\g7\hl7v2\v25\segment {

	use mg\g7\hl7v2\v25\GenericSegment;
	use mg\g7\Exception;

	const V25_IPC_FIELDS_NUM = 10;
	class IPC extends GenericSegment {
		public function __construct($fields, $encodingCharacter) {
			parent::__construct ( $fields, $encodingCharacter );
			$this->addField ( "ST", $fields [0], 3,  false );
			$this->addField ( "EI", $fields [1], 80,  false );
			$this->addField ( "EI", $fields [2], 22, false );
			$this->addField ( "EI", $fields [3], 70,  false );
			$this->addField ( "EI", $fields [4], 22,  false );
			$this->addField ( "CWE", $fields [5], 16,  false );
			$this->addField ( "CWE", $fields [6], 250,  true );
			$this->addField ( "EI", $fields [7], 22,  false );
			$this->addField ( "CWE", $fields [8], 250,  true );
			$this->addField ( "ST", $fields [9], 16,  false );
		}
		public function parse() {
			if (count ( $this->fields ) < V25_IPC_FIELDS_NUM) {
				throw new Exception ( __CLASS__ . " FIELDS LACK :" . count ( $this->fields ) );
			}
			parent::_parse ();
		}
		// IPC-0 セグメントID
		public function getSegmentId() {
			return $this->getField ( 0 );
		}
		// IPC-1 受付番号
		public function getAccessionIdentifier() {
			return $this->getField ( 1 );
		}
		// IPC-2 要求手続きID
		public function getRequestedProcedureId() {
			return $this->getField ( 2 );
		}
		// IPC-3 検査インスタンスUID
		public function getStudyInstanceUid() {
			return $this->getField ( 3 );
		}
		// IPC-4 予約済手続きステップID
		public function getScheduledProcedureStepId() {
			return $this->getField ( 4 );
		}
		// IPC-5 モダリティ
		public function getModality() {
			return $this->getField ( 5 );
		}
		// IPC-6 プロトコルコード
		public function getProtocolCode() {
			return $this->getField ( 6 );
		}
		// IPC-7 予約済ステーション名
		public function getScheduledStationName() {
			return $this->getField ( 7 );
		}
		// IPC-8 予約済手続きステップ場所
		public function getScheduledProcedureStepLocation() {
			return $this->getField ( 8 );
		}
		// IPC-9 予約済AEタイトル
		public function getScheduledAeTitle() {
			return $this->getField ( 9 );
		}
	}
}
