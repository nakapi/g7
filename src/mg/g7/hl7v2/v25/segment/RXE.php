<?php

namespace mg\g7\hl7v2\v25\segment {

	use mg\g7\hl7v2\v25\GenericSegment;
	use mg\g7\Exception;

	const V25_RXE_FIELDS_NUM = 45;
	class RXE extends GenericSegment {
		public function __construct($fields, $encodingCharacter) {
			parent::__construct ( $fields, $encodingCharacter );
			$this->addField ( "ST", $fields [0], 3, false );
			$this->addField ( "TQ", $fields [1], 200, false );
			$this->addField ( "CWE", $fields [2], 250, false );
			$this->addField ( "NM", $fields [3], 20, false );
			$this->addField ( "NM", $fields [4], 20, false );
			$this->addField ( "CWE", $fields [5], 250, false );
			$this->addField ( "CWE", $fields [6], 250, false );
			$this->addField ( "CWE", $fields [7], 250, true );
			$this->addField ( "LA1", $fields [8], 200, false );
			$this->addField ( "ID", $fields [9], 1, false );
			$this->addField ( "NM", $fields [10], 20, false );
			$this->addField ( "CWE", $fields [11], 250, false );
			$this->addField ( "NM", $fields [12], 3, false );
			$this->addField ( "XCN", $fields [13], 250, true );
			$this->addField ( "XCN", $fields [14], 250, true );
			$this->addField ( "ST", $fields [15], 20, false );
			$this->addField ( "NM", $fields [16], 20, false );
			$this->addField ( "NM", $fields [17], 20, false );
			$this->addField ( "TS", $fields [18], 26, false );
			//LENGTH:10 NG? TODO
			$this->addField ( "CQ", $fields [19], 250, false );
			$this->addField ( "ID", $fields [20], 1, false );
			$this->addField ( "CWE", $fields [21], 250, true );
			$this->addField ( "ST", $fields [22], 20, false );
			$this->addField ( "ST", $fields [23], 6, false );
			$this->addField ( "CWE", $fields [24], 250, false );
			$this->addField ( "NM", $fields [25], 20, false );
			$this->addField ( "CWE", $fields [26], 250, false );
			$this->addField ( "CWE", $fields [27], 250, true );
			$this->addField ( "NM", $fields [28], 20, false );
			$this->addField ( "CWE", $fields [29], 250, false );
			$this->addField ( "ID", $fields [30], 2, false );
			$this->addField ( "CWE", $fields [31], 250, true );
			$this->addField ( "TS", $fields [32], 26, false );
			$this->addField ( "NM", $fields [33], 5, false );
			$this->addField ( "CWE", $fields [34], 250, false );
			$this->addField ( "CWE", $fields [35], 60, false );
			$this->addField ( "ID", $fields [36], 1, false );
			$this->addField ( "CWE", $fields [37], 60, true );
			$this->addField ( "CWE", $fields [38], 250, false );
			$this->addField ( "NM", $fields [39], 250, false );
			$this->addField ( "CWE", $fields [40], 250, false );
			$this->addField ( "XAD", $fields [41], 250, false );
			$this->addField ( "PL", $fields [42], 80, false );
			$this->addField ( "XAD", $fields [43], 250, false );
			$this->addField ( "ID", $fields [44], 1, false );
		}
		public function parse() {
			if (count ( $this->fields ) < V25_RXE_FIELDS_NUM) {
				throw new Exception ( __CLASS__ . " FIELDS LACK :" . count ( $this->fields ) );
			}
			parent::_parse ();
		}
		// RXE-0 セグメントID
		public function getSegmentId() {
			return $this->getField ( 0 );
		}
		// RXE-1 数量/タイミング
		public function getQuantityTiming() {
			return $this->getField ( 1 );
		}
		// RXE-2 与薬コード
		public function getGiveCode() {
			return $this->getField ( 2 );
		}
		// RXE-3 与薬量-最小
		public function getGiveAmountMinimum() {
			return $this->getField ( 3 );
		}
		// RXE-4 与薬量-最大
		public function getGiveAmountMaximum() {
			return $this->getField ( 4 );
		}
		// RXE-5 与薬単位
		public function getGiveUnits() {
			return $this->getField ( 5 );
		}
		// RXE-6 与薬剤形
		public function getGiveDosageForm() {
			return $this->getField ( 6 );
		}
		// RXE-7 依頼者の投薬指示
		public function getProvidersAdministrationInstructions() {
			return $this->getField ( 7 );
		}
		// RXE-8 配布先
		public function getDeliverToLocation() {
			return $this->getField ( 8 );
		}
		// RXE-9 代替品状態
		public function getSubstitutionStatus() {
			return $this->getField ( 9 );
		}
		// RXE-10 調剤量
		public function getDispenseAmount() {
			return $this->getField ( 10 );
		}
		// RXE-11 調剤単位
		public function getDispenseUnits() {
			return $this->getField ( 11 );
		}
		// RXE-12 同一薬発行数
		public function getNumberOfRefills() {
			return $this->getField ( 12 );
		}
		// RXE-13 オーダ発行者のDEA番号
		public function getOrderingProvidersDeaNumber() {
			return $this->getField ( 13 );
		}
		// RXE-14 薬剤師/治療提供者の検証ID
		public function getPharmacistTreatmentSuppliersVerifierID() {
			return $this->getField ( 14 );
		}
		// RXE-15 処方箋番号
		public function getPrescriptionNumber() {
			return $this->getField ( 15 );
		}
		// RXE-16 薬剤残数
		public function getNumberOfRefillsRemaining() {
			return $this->getField ( 16 );
		}
		// RXE-17 調剤済薬品数または投与数
		public function getNumberOfRefillsDosesDispensed() {
			return $this->getField ( 17 );
		}
		// RXE-18 調剤済薬品数または投与数の最新日時
		public function getDtOfMostRecentRefillOrDoseDispensed() {
			return $this->getField ( 18 );
		}
		// RXE-19 1日あたりの総投与量
		public function getTotalDailyDose() {
			return $this->getField ( 19 );
		}
		// RXE-20 人によるレビューの必要性
		public function getNeedsHumanReview() {
			return $this->getField ( 20 );
		}
		// RXE-21 薬剤部門/治療部門による特別な調剤指示
		public function getPharmacyTreatmentSuppliersSpecialDispensingInstructions() {
			return $this->getField ( 21 );
		}
		// RXE-22 時間あたりの与薬 
		public function getGivePerTimeUnit() {
			return $this->getField ( 22 );
		}
		// RXE-23 与薬速度
		public function getGiveRateAmount() {
			return $this->getField ( 23 );
		}
		// RXE-24 与薬速度単位
		public function getGiveRateUnits() {
			return $this->getField ( 24 );
		}
		// RXE-25 与薬力価
		public function getGiveStrength() {
			return $this->getField ( 25 );
		}
		// RXE-26 与薬力価単位
		public function getGiveStrengthUnits() {
			return $this->getField ( 26 );
		}
		// RXE-27 与薬指示
		public function getGiveIndication() {
			return $this->getField ( 27 );
		}
		// RXE-28 調剤パッケージサイズ
		public function getDispensePackageSize() {
			return $this->getField ( 28 );
		}
		// RXE-29 調剤パッケージサイズの単位
		public function getDispensePackageSizeUnit() {
			return $this->getField ( 29 );
		}
		// RXE-30 調剤パッケージ方法
		public function getDispensePackageMethod() {
			return $this->getField ( 30 );
		}
		// RXE-31 補足コード
		public function getSupplementaryCode() {
			return $this->getField ( 31 );
		}
		// RXE-32 当初のオーダ日／時間
		public function getOriginalOrderDateTime() {
			return $this->getField ( 32 );
		}
		// RXE-33 与薬力価量
		public function getGiveDrugStrengthVolume() {
			return $this->getField ( 33 );
		}
		// RXE-34 与薬力価量単位
		public function getGiveDrugStrengthVolumeUnits() {
			return $this->getField ( 34 );
		}
		// RXE-35 薬物コントロールスケジュール
		public function getControlledSubstanceSchedule() {
			return $this->getField ( 35 );
		}
		// RXE-36 処方集ステータス
		public function getFormularyStatus() {
			return $this->getField ( 36 );
		}
		// RXE-37 薬物代替え
		public function getPharmaceuticalSubstanceAlternative() {
			return $this->getField ( 37 );
		}
		// RXE-38 最新の与薬の薬剤部
		public function getPharmacyOfMostRecentFill() {
			return $this->getField ( 38 );
		}
		// RXE-39 最初の調剤量
		public function getInitialDispenseAmount() {
			return $this->getField ( 39 );
		}
		// RXE-40 調剤薬剤部
		public function getDispensingPharmacy() {
			return $this->getField ( 40 );
		}
		// RXE-41 調剤薬剤部の住所
		public function getDispensingPharmacyAddress() {
			return $this->getField ( 41 );
		}
		// RXE-42 患者への配達場所
		public function getDeliverToPatientLocation() {
			return $this->getField ( 42 );
		}
		// RXE-43 配達先住所
		public function getDeliverToAddress() {
			return $this->getField ( 43 );
		}
		// RXE-44 薬剤オーダタイプ
		public function getPharmacyOrderType() {
			return $this->getField ( 44 );
		}
	}
}
