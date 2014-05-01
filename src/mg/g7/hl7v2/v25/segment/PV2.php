<?php

namespace mg\g7\hl7v2\v25\segment {

	use mg\g7\hl7v2\v25\GenericSegment;
	use mg\g7\Exception;

	const V25_PV2_FIELDS_NUM = 50;
	class PV2 extends GenericSegment {
		public function __construct($fields, $encodingCharacter) {
			parent::__construct ( $fields, $encodingCharacter );
			$this->addField ( "ST", $fields [0], 3,  false );
			$this->addField ( "PL", $fields [1], 80,  false );
			$this->addField ( "CWE", $fields [2], 250,  false );
			$this->addField ( "CWE", $fields [3], 250,  false );
			$this->addField ( "CWE", $fields [4], 250,  false );
			$this->addField ( "ST", $fields [5], 25,  true );
			$this->addField ( "ST", $fields [6], 25,  false );
			$this->addField ( "IS", $fields [7], 2,  true );
			$this->addField ( "TS", $fields [8], 26,  false );
			$this->addField ( "TS", $fields [9], 26,  false );
			$this->addField ( "NM", $fields [10], 3,  false );
			$this->addField ( "NM", $fields [11], 3,  false );
			$this->addField ( "ST", $fields [12], 50,  false );
			$this->addField ( "XCN", $fields [13], 250,  true );
			$this->addField ( "DT", $fields [14], 8,  false );
			$this->addField ( "ID", $fields [15], 1,  false );
			$this->addField ( "IS", $fields [16], 1,  false );
			$this->addField ( "DT", $fields [17], 8,  false );
			$this->addField ( "IS", $fields [18], 2,  false );
			$this->addField ( "ID", $fields [19], 1,  false );
			$this->addField ( "NM", $fields [20], 1,  false );
			$this->addField ( "IS", $fields [21], 1,  false );
			$this->addField ( "ID", $fields [22], 1,  false );
			$this->addField ( "XON", $fields [23], 250,  true );
			$this->addField ( "IS", $fields [24], 2,  false );
			$this->addField ( "IS", $fields [25], 1,  false );
			$this->addField ( "DT", $fields [26], 8,  false );
			$this->addField ( "IS", $fields [27], 2,  false );
			$this->addField ( "DT", $fields [28], 8,  false );
			$this->addField ( "DT", $fields [29], 8,  false );
			$this->addField ( "CWE", $fields [30], 250,  false );
			$this->addField ( "IS", $fields [31], 2,  false );
			$this->addField ( "ID", $fields [32], 1,  false );
			$this->addField ( "TS", $fields [33], 26,  false );
			$this->addField ( "ID", $fields [34], 1,  false );
			$this->addField ( "ID", $fields [35], 1,  false );
			$this->addField ( "ID", $fields [36], 1,  false );
			$this->addField ( "ID", $fields [37], 1,  false );
			$this->addField ( "CWE", $fields [38], 250,  false );
			$this->addField ( "CWE", $fields [39], 250,  true );
			$this->addField ( "CWE", $fields [40], 250,  false );
			$this->addField ( "CWE", $fields [41], 250,  true );
			$this->addField ( "CWE", $fields [42], 250,  false );
			$this->addField ( "IS", $fields [43], 2,  false );
			$this->addField ( "IS", $fields [44], 2,  false );
			$this->addField ( "CWE", $fields [45], 250,  true );
			$this->addField ( "DT", $fields [46], 8,  false );
			$this->addField ( "TS", $fields [47], 26,  false );
			$this->addField ( "TS", $fields [48], 26,  false );
			$this->addField ( "IS", $fields [49], 20,  true );
		}
		public function parse() {
			if (count ( $this->fields ) < V25_PV2_FIELDS_NUM) {
				throw new Exception ( __CLASS__ . " FIELDS LACK :" . count ( $this->fields ) );
			}
			parent::_parse ();
		}
		// PV2-0 セグメントID
		public function getSegmentId() {
			return $this->getField ( 0 );
		}
		// PV2-1 事前保留所在場所
		public function getPriorPendingLocation() {
			return $this->getField ( 1 );
		}
		// PV2-2 宿泊設備コード
		public function getAccommodationCode() {
			return $this->getField ( 2 );
		}
		// PV2-3 入院の理由
		public function getAdmitReason() {
			return $this->getField ( 3 );
		}
		// PV2-4 転科転棟の理由
		public function getTransferReason() {
			return $this->getField ( 4 );
		}
		// PV2-5 患者貴重品情報
		public function getPatientValuables() {
			return $this->getField ( 5 );
		}
		// PV2-6 患者貴重品の保管場所
		public function getPatientValuablesLocation() {
			return $this->getField ( 6 );
		}
		// PV2-7 来院種別コード
		public function getVisitUserCode() {
			return $this->getField ( 7 );
		}
		// PV2-8 予定入院日時
		public function getExpectedAdmitTime() {
			return $this->getField ( 8 );
		}
		// PV2-9 予定退院日時
		public function getExpectedDischargeTime() {
			return $this->getField ( 9 );
		}
		// PV2-10 予定入院期間
		public function getEstimatedLengthOfInpatientStay() {
			return $this->getField ( 10 );
		}
		// PV2-11 入院期間
		public function getActualLengthOfInpatientStay() {
			return $this->getField ( 11 );
		}
		// PV2-12 来院時記述情報
		public function getVisitDescription() {
			return $this->getField ( 12 );
		}
		// PV2-13 紹介元情報
		public function getReferralSourceCode() {
			return $this->getField ( 13 );
		}
		// PV2-14 前回来院日
		public function getPreviousServiceDate() {
			return $this->getField ( 14 );
		}
		// PV2-15 職業由来疾病情報
		public function getEmploymentIllnessRelatedIndicator() {
			return $this->getField ( 15 );
		}
		// PV2-16 削除状態標識
		public function getPurgeStatusCode() {
			return $this->getField ( 16 );
		}
		// PV2-17 削除予定日
		public function getPurgeStatusDate() {
			return $this->getField ( 17 );
		}
		// PV2-18 特別プログラムコード
		public function getSpecialProgramCode() {
			return $this->getField ( 18 );
		}
		// PV2-19 保持標識
		public function getRetentionIndicator() {
			return $this->getField ( 19 );
		}
		// PV2-20 適応可能保険の数
		public function getExpectedNumberOfInsurancePlans() {
			return $this->getField ( 20 );
		}
		// PV2-21 来院情報周知範囲
		public function getVisitPublicityCode() {
			return $this->getField ( 21 );
		}
		// PV2-22 来院情報保護標識
		public function getVisitProtectionIndicator() {
			return $this->getField ( 22 );
		}
		// PV2-23 診療部門名
		public function getClinicOrganizationName() {
			return $this->getField ( 23 );
		}
		// PV2-24 患者状態
		public function getPatientStatusCode() {
			return $this->getField ( 24 );
		}
		// PV2-25 受診優先指標
		public function getVisitPriorityCode() {
			return $this->getField ( 25 );
		}
		// PV2-26 最終治療日
		public function getPreviousTreatmentDate() {
			return $this->getField ( 26 );
		}
		// PV2-27 希望退院種別
		public function getExpectedDischargeDisposition() {
			return $this->getField ( 27 );
		}
		// PV2-28 署名日
		public function getSignatureOnFileDate() {
			return $this->getField ( 28 );
		}
		// PV2-29 発症日
		public function getFirstSimilarIllnessDate() {
			return $this->getField ( 29 );
		}
		// PV2-30 患者費用補正コード
		public function getPatientChargeAdjustmentCode() {
			return $this->getField ( 30 );
		}
		// PV2-31 通院治療標識
		public function getRecurringServiceCode() {
			return $this->getField ( 31 );
		}
		// PV2-32 請求媒体コード
		public function getBillingMediaCode() {
			return $this->getField ( 32 );
		}
		// PV2-33 予定手術日時
		public function getExpectedSurgeryDateAndTime() {
			return $this->getField ( 33 );
		}
		// PV2-34 軍隊との契約の有無
		public function getMilitaryPartnershipCode() {
			return $this->getField ( 34 );
		}
		// PV2-35 非軍隊施設の利用許可の有無
		public function getMilitaryNonAvailabilityCode() {
			return $this->getField ( 35 );
		}
		// PV2-36 新生児標識
		public function getNewbornBabyIndicator() {
			return $this->getField ( 36 );
		}
		// PV2-37 新生児残留標識
		public function getBabyDetainedIndicator() {
			return $this->getField ( 37 );
		}
		// PV2-38 患者到着手段
		public function getModeOfArrivalCode() {
			return $this->getField ( 38 );
		}
		// PV2-39 嗜好情報
		public function getRecreationalDrugUseCode() {
			return $this->getField ( 39 );
		}
		// PV2-40 入院時患者重症度
		public function getAdmissionLevelOfCareCode() {
			return $this->getField ( 40 );
		}
		// PV2-41 要注意コード
		public function getPrecautionCode() {
			return $this->getField ( 41 );
		}
		// PV2-42 患者容態標識
		public function getPatientConditionCode() {
			return $this->getField ( 42 );
		}
		// PV2-43 延命希望標識
		public function getLivingWillCode() {
			return $this->getField ( 43 );
		}
		// PV2-44 臓器提供希望標識
		public function getOrganDonorCode() {
			return $this->getField ( 44 );
		}
		// PV2-45 その他の患者要望
		public function getAdvanceDirectiveCode() {
			return $this->getField ( 45 );
		}
		// PV2-46 患者状態(PV2-25)の発症日
		public function getPatientStatusEffectiveDate() {
			return $this->getField ( 46 );
		}
		// PV2-47 予定帰院日時
		public function getExpectedLoaReturnTime() {
			return $this->getField ( 47 );
		}
		// PV2-48 入院前検査予定日時
		public function getExpectedPreAdmissionTestingTime() {
			return $this->getField ( 48 );
		}
		// PV2-49 聖職者通知標識
		public function getNotifyClergyCode() {
			return $this->getField ( 49 );
		}
	}
}
