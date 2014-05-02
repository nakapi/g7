<?php

namespace mg\g7\hl7v2\v25\segment {

	use mg\g7\hl7v2\v25\GenericSegment;
	use mg\g7\Exception;

	const V25_RXA_FIELDS_NUM = 27;
	class RXA extends GenericSegment {
		public function __construct($fields, $encodingCharacter) {
			parent::__construct ( $fields, $encodingCharacter );
			$this->addField ( "ST", $fields [0], 3, false );
			$this->addField ( "NM", $fields [1], 4, false );
			$this->addField ( "NM", $fields [2], 4, false );
			$this->addField ( "TS", $fields [3], 26, false );
			$this->addField ( "TS", $fields [4], 26, false );
			$this->addField ( "CWE", $fields [5], 250, false );
			$this->addField ( "NM", $fields [6], 20, false );
			$this->addField ( "CWE", $fields [7], 250, true );
			$this->addField ( "CWE", $fields [8], 250, false );
			$this->addField ( "CWE", $fields [9], 250, true );
			$this->addField ( "XCN", $fields [10], 250, true );
			$this->addField ( "LA2", $fields [11], 200, false );
			$this->addField ( "ST", $fields [12], 20, false );
			$this->addField ( "NM", $fields [13], 20, false );
			$this->addField ( "CWE", $fields [14], 250, false );
			$this->addField ( "ST", $fields [15], 20, true );
			$this->addField ( "TS", $fields [16], 26, true );
			$this->addField ( "CWE", $fields [17], 250, true );
			$this->addField ( "CWE", $fields [18], 250, true );
			$this->addField ( "CWE", $fields [19], 250, true );
			$this->addField ( "ID", $fields [20], 2, false );
			$this->addField ( "ID", $fields [21], 2, false );
			$this->addField ( "TS", $fields [22], 26, false );
			$this->addField ( "NM", $fields [23], 5, false );
			$this->addField ( "CWE", $fields [24], 250, false );
			$this->addField ( "CWE", $fields [25], 60, false );
			$this->addField ( "ID", $fields [26], 1, false );
		}
		public function parse() {
			if (count ( $this->fields ) < V25_RXA_FIELDS_NUM) {
				throw new Exception ( __CLASS__ . " FIELDS LACK :" . count ( $this->fields ) );
			}
			parent::_parse ();
		}
		// RXA-0 セグメントID
		public function getSegmentId() {
			return $this->getField ( 0 );
		}
		// RXA-1 与薬サブIDカウンター
		public function getGiveSubIdCounter () {
			return $this->getField ( 1 );
		}
		// RXA-2 投薬サブIDカウンター
		public function getAdministrationSubIdCounter() {
			return $this->getField ( 2 );
		}
		// RXA-3 投薬開始日時
		public function getTimeStartOfAdministration () {
			return $this->getField ( 3 );
		}
		// RXA-4 投薬終了日時
		public function getTimeEndOfAdministration() {
			return $this->getField ( 4 );
		}
		// RXA-5 投薬コード
		public function getAdministeredCode() {
			return $this->getField ( 5 );
		}
		// RXA-6 投薬量
		public function getAdministeredAmount() {
			return $this->getField ( 6 );
		}
		// RXA-7 投薬単位
		public function getAdministeredUnits() {
			return $this->getField ( 7 );
		}
		// RXA-8 投薬剤形
		public function getAdministeredDosageForm() {
			return $this->getField ( 8 );
		}
		// RXA-9 投薬注記
		public function getAdministrationNotes() {
			return $this->getField ( 9 );
		}
		// RXA-10 投薬者
		public function getAdministeringProvider() {
			return $this->getField ( 10 );
		}
		// RXA-11 投薬場所
		public function getAdministeredAtLocation() {
			return $this->getField ( 11 );
		}
		// RXA-12 時間あたりの投薬
		public function getAdministeredPerTimeUnit() {
			return $this->getField ( 12 );
		}
		// RXA-13 投薬力価
		public function getAdministeredStrength() {
			return $this->getField ( 13 );
		}
		// RXA-14 投薬力価単位
		public function getAdministeredStrengthUnits() {
			return $this->getField ( 14 );
		}
		// RXA-15 薬剤ロット番号
		public function getSubstanceLotNumber () {
			return $this->getField ( 15 );
		}
		// RXA-16 薬剤有効期限
		public function getSubstanceExpirationDate() {
			return $this->getField ( 16 );
		}
		// RXA-17 薬剤製造者名
		public function getSubstanceManufacturerName() {
			return $this->getField ( 17 );
		}
		// RXA-18 薬剤／治療拒否理由
		public function getSubstanceTreatmentRefusalReason() {
			return $this->getField ( 18 );
		}
		// RXA-19 指示
		public function getIndication () {
			return $this->getField ( 19 );
		}
		// RXA-20 完了状態
		public function getCompletionStatus() {
			return $this->getField ( 20 );
		}
		// RXA-21 アクションコード_RXA
		public function getActionCodeRxa() {
			return $this->getField ( 21 );
		}
		// RXA-22 システム入力日時
		public function getSystemEntryTime() {
			return $this->getField ( 22 );
		}
		// RXA-23 投薬力価量
		public function getAdministeredDrugStrengthVolume() {
			return $this->getField ( 23 );
		}
		// RXA-24 投薬力価量単位
		public function getAdministeredDrugStrengthVolumeUnits() {
			return $this->getField ( 24 );
		}
		// RXA-25 投薬バーコード識別機能
		public function getAdministeredBarcodeIdentifier() {
			return $this->getField ( 25 );
		}
		// RXA-26 薬剤オーダタイプ
		public function getPharmacyOrderType() {
			return $this->getField ( 26 );
		}
	}
}
