<?php

namespace mg\g7\hl7v2\v25\segment {

	use mg\g7\hl7v2\v25\GenericSegment;
	use mg\g7\Exception;

	const V25_OBX_FIELDS_NUM = 20;
	class OBX extends GenericSegment {
		public function __construct($fields, $encodingCharacter) {
			parent::__construct ( $fields, $encodingCharacter );
			$this->addField ( "ST", $fields [0], 3,  false );
			$this->addField ( "SI", $fields [1], 4,  false );
			$this->addField ( "ID", $fields [2], 3, false );//SSMIX2相違 3にセット
			$this->addField ( "CWE", $fields [3], 250,  false );
			$this->addField ( "ST", $fields [4], 20,  false );
			$this->addField ( "CWE", $fields [5], 65536,  true ); // SEQ-5 DT * 血液型の場合CWE
			$this->addField ( "CWE", $fields [6], 250,  false );
			$this->addField ( "ST", $fields [7], 60,  false );
			$this->addField ( "IS", $fields [8], 5,  true );
			$this->addField ( "NM", $fields [9], 5,  false );
			$this->addField ( "ID", $fields [10], 2,  true );
			$this->addField ( "ID", $fields [11], 1,  false );
			$this->addField ( "TS", $fields [12], 26,  false );
			$this->addField ( "ST", $fields [13], 20,  false );
			$this->addField ( "TS", $fields [14], 26,  false );
			$this->addField ( "CWE", $fields [15], 250,  false );
			$this->addField ( "XCN", $fields [16], 250,  true );
			$this->addField ( "CWE", $fields [17], 250,  true );
			$this->addField ( "EI", $fields [18], 22,  true );
			$this->addField ( "TS", $fields [19], 26,  false );
		}
		public function parse() {
			if (count ( $this->fields ) < V25_OBX_FIELDS_NUM) {
				throw new Exception ( __CLASS__ . " FIELDS LACK :" . count ( $this->fields ) );
			}
			parent::_parse ();
		}
		// OBX-0 セグメントID
		public function getSegmentId() {
			return $this->getField ( 0 );
		}
		// OBX-1 セットID-OBX
		public function getSetIdObx() {
			return $this->getField ( 1 );
		}
		// OBX-2 値型
		public function getValueType() {
			return $this->getField ( 2 );
		}
		// OBX-3 検査項目
		public function getObservationIdentifier() {
			return $this->getField ( 3 );
		}
		// OBX-4 検査副ID
		public function getObservationSubId() {
			return $this->getField ( 4 );
		}
		// OBX-5 検査値
		public function getObservationValue() {
			return $this->getField ( 5 );
		}
		// OBX-6 単位
		public function getUnits() {
			return $this->getField ( 6 );
		}
		// OBX-7 基準値範囲
		public function getReferenceRange() {
			return $this->getField ( 7 );
		}
		// OBX-8 異常フラグ
		public function getAbnormalFlags() {
			return $this->getField ( 8 );
		}
		// OBX-9 確率
		public function getProbability() {
			return $this->getField ( 9 );
		}
		// OBX-10 異常検査の特質
		public function getNatureOfAbnormalTest() {
			return $this->getField ( 10 );
		}
		// OBX-11 検査結果状態
		public function getObservResultStatus() {
			return $this->getField ( 11 );
		}
		// OBX-12 基準値範囲有効日付
		public function getDataLastObsNormalValues() {
			return $this->getField ( 12 );
		}
		// OBX-13 使用者定義アクセス点検
		public function getUserDefinedAccessChecks() {
			return $this->getField ( 13 );
		}
		// OBX-14 検査日時
		public function getDateOfTheObservation() {
			return $this->getField ( 14 );
		}
		// OBX-15 実施者ID
		public function getProducersId() {
			return $this->getField ( 15 );
		}
		// OBX-16 検査責任者
		public function getResponsibleObserver() {
			return $this->getField ( 16 );
		}
		// OBX-17 検査方法
		public function getObservationMethod() {
			return $this->getField ( 17 );
		}
		// OBX-18 装置ID
		public function getEquipmentInstanceIdentifier() {
			return $this->getField ( 18 );
		}
		// OBX-19 分析日時
		public function getDateOfTheAnalysis() {
			return $this->getField ( 19 );
		}
	}
}
