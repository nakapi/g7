<?php

namespace mg\g7\hl7v2\v25\segment {

	use mg\g7\hl7v2\v25\GenericSegment;
	use mg\g7\Exception;

	const V25_IN1_FIELDS_NUM = 54;
	class IN1 extends GenericSegment {
		public function __construct($fields, $encodingCharacter) {
			parent::__construct ( $fields, $encodingCharacter );
			$this->addField ( "ST", $fields [0], 3,  false );
			$this->addField ( "SI", $fields [1], 4,  false );
			$this->addField ( "CWE", $fields [2], 250,  false );
			$this->addField ( "CX", $fields [3], 250,  true );
			$this->addField ( "XON", $fields [4], 250,  true );
			$this->addField ( "XAD", $fields [5], 250,  true );
			$this->addField ( "XPN", $fields [6], 250,  true );
			$this->addField ( "XTN", $fields [7], 250,  true );
			$this->addField ( "ST", $fields [8], 12,  false );
			$this->addField ( "XON", $fields [9], 250,  true );
			$this->addField ( "CX", $fields [10], 250,  true );
			$this->addField ( "XON", $fields [11], 250,  true );
			$this->addField ( "DT", $fields [12], 8,  false );
			$this->addField ( "DT", $fields [13], 8,  false );
			$this->addField ( "AUI", $fields [14], 239,  false );
			$this->addField ( "IS", $fields [15], 3,  false );
			$this->addField ( "XPN", $fields [16], 250,  true );
			$this->addField ( "CWE", $fields [17], 250,  false );
			$this->addField ( "TS", $fields [18], 26,  false );
			$this->addField ( "XAD", $fields [19], 250,  true );
			$this->addField ( "IS", $fields [20], 2,  false );
			$this->addField ( "IS", $fields [21], 2,  false );
			$this->addField ( "ST", $fields [22], 2,  false );
			$this->addField ( "ID", $fields [23], 1,  false );
			$this->addField ( "DT", $fields [24], 8,  false );
			$this->addField ( "ID", $fields [25], 1,  false );
			$this->addField ( "DT", $fields [26], 8,  false );
			$this->addField ( "IS", $fields [27], 2,  false );
			$this->addField ( "ST", $fields [28], 15,  false );
			$this->addField ( "TS", $fields [29], 26,  false );
			$this->addField ( "XCN", $fields [30], 250,  true );
			$this->addField ( "IS", $fields [31], 2,  false );
			$this->addField ( "IS", $fields [32], 2,  false );
			$this->addField ( "NM", $fields [33], 4,  false );
			$this->addField ( "NM", $fields [34], 4,  false );
			$this->addField ( "IS", $fields [35], 8,  false );
			$this->addField ( "ST", $fields [36], 15,  false );
			$this->addField ( "CP", $fields [37], 12,  false );
			$this->addField ( "CP", $fields [38], 12,  false );
			$this->addField ( "NM", $fields [39], 4,  false );
			$this->addField ( "CP", $fields [40], 12,  false );
			$this->addField ( "CP", $fields [41], 12,  false );
			$this->addField ( "CWE", $fields [42], 250,  false );
			$this->addField ( "IS", $fields [43], 1,  false );
			$this->addField ( "XAD", $fields [44], 250,  true );
			$this->addField ( "ST", $fields [45], 2,  false );
			$this->addField ( "IS", $fields [46], 8,  false );
			$this->addField ( "IS", $fields [47], 3,  false );
			$this->addField ( "IS", $fields [48], 2,  false );
			$this->addField ( "CX", $fields [49], 250,  true );
			$this->addField ( "IS", $fields [50], 1,  false );
			$this->addField ( "DT", $fields [51], 8,  false );
			$this->addField ( "ST", $fields [52], 250,  false );
			$this->addField ( "IS", $fields [53], 2,  false );
		}
		public function parse() {
			if (count ( $this->fields ) < V25_IN1_FIELDS_NUM) {
				throw new Exception ( __CLASS__ . " FIELDS LACK :" . count ( $this->fields ) );
			}
			parent::_parse ();
		}
		// IN1-0 セグメントID
		public function getSegmentId() {
			return $this->getField ( 0 );
		}
		// IN1-1 セットID-IN1
		public function getSetIdIn1() {
			return $this->getField ( 1 );
		}
		// IN1-2 保険プランID
		public function getInsurancePlanID() {
			return $this->getField ( 2 );
		}
		// IN1-3 保険会社ID
		public function getInsuranceCompanyID() {
			return $this->getField ( 3 );
		}
		// IN1-4 保険会社名
		public function getInsuranceCompanyName() {
			return $this->getField ( 4 );
		}
		// IN1-5 保険会社住所
		public function getInsuranceCompanyAddress() {
			return $this->getField ( 5 );
		}
		// IN1-6 保険会社連絡者
		public function getInsuranceContactPerson() {
			return $this->getField ( 6 );
		}
		// IN1-7 保険会社電話番号
		public function getInsurancePhoneNumber() {
			return $this->getField ( 7 );
		}
		// IN1-8 グループ番号
		public function getGroupNumber() {
			return $this->getField ( 8 );
		}
		// IN1-9 グループ名
		public function getGroupName() {
			return $this->getField ( 9 );
		}
		// IN1-10 被保険者グループ雇用者ID
		public function getInsuredsGroupEmpID() {
			return $this->getField ( 10 );
		}
		// IN1-11 被保険者グループ雇用者名
		public function getInsuredsGroupEmpName() {
			return $this->getField ( 11 );
		}
		// IN1-12 プラン有効日付
		public function getPlanEffectiveDate() {
			return $this->getField ( 12 );
		}
		// IN1-13 プラン失効日付
		public function getPlanExpirationDate() {
			return $this->getField ( 13 );
		}
		// IN1-14 認定情報
		public function getAuthorizationInformation() {
			return $this->getField ( 14 );
		}
		// IN1-15 プランタイプ
		public function getPlanType() {
			return $this->getField ( 15 );
		}
		// IN1-16 被保険者名
		public function getNameOfInsured() {
			return $this->getField ( 16 );
		}
		// IN1-17 被保険者と患者の関係
		public function getInsuredsRelationshipToPatient() {
			return $this->getField ( 17 );
		}
		// IN1-18 被保険者生年月日
		public function getInsuredsDateOfBirth() {
			return $this->getField ( 18 );
		}
		// IN1-19 被保険者住所
		public function getInsuredsAddress() {
			return $this->getField ( 19 );
		}
		// IN1-20 給付金の配分
		public function getAssignmentOfBenefits() {
			return $this->getField ( 20 );
		}
		// IN1-21 給付金の調整
		public function getCoordinationOfBenefits() {
			return $this->getField ( 21 );
		}
		// IN1-22 給付金優先順位の調整
		public function getCoordOfBenPriority() {
			return $this->getField ( 22 );
		}
		// IN1-23 入院通知フラグ
		public function getNoticeOfAdmissionFlag() {
			return $this->getField ( 23 );
		}
		// IN1-24 入院通知日付
		public function getNoticeOfAdmissionDate() {
			return $this->getField ( 24 );
		}
		// IN1-25 有資格報告フラグ
		public function getReportOfEligibilityFlag() {
			return $this->getField ( 25 );
		}
		// IN1-26 有資格報告日付
		public function getReportOfEligibilityDate() {
			return $this->getField ( 26 );
		}
		// IN1-27 情報公開コード
		public function getReleaseInformationCode() {
			return $this->getField ( 27 );
		}
		// IN1-28 入院前認定書(PAC)
		public function getPreAdmitCert() {
			return $this->getField ( 28 );
		}
		// IN1-29 確認日付/時刻
		public function getVerificationDate() {
			return $this->getField ( 29 );
		}
		// IN1-30 確認者
		public function getVerificationBy() {
			return $this->getField ( 30 );
		}
		// IN1-31 同意種別コード
		public function getTypeOfAgreementCode() {
			return $this->getField ( 31 );
		}
		// IN1-32 請求状況
		public function getBillingStatus() {
			return $this->getField ( 32 );
		}
		// IN1-33 生涯予備日数
		public function getLifetimeReserveDays() {
			return $this->getField ( 33 );
		}
		// IN1-34 生涯予備日数までの遅延
		public function getDelayBeforeLRDay() {
			return $this->getField ( 34 );
		}
		// IN1-35 会社プランコード
		public function getCompanyPlanCode() {
			return $this->getField ( 35 );
		}
		// IN1-36 ポリシー番号
		public function getPolicyNumber() {
			return $this->getField ( 36 );
		}
		// IN1-37 免責ポリシー
		public function getPolicyDeductible() {
			return $this->getField ( 37 );
		}
		// IN1-38 ポリシー総額
		public function getPolicyLimitAmount() {
			return $this->getField ( 38 );
		}
		// IN1-39 ポリシー限度日数
		public function getPolicyLimitDays() {
			return $this->getField ( 39 );
		}
		// IN1-40 室科　準備室
		public function getRoomRateSemiPrivate() {
			return $this->getField ( 40 );
		}
		// IN1-41 室科　個室
		public function getRoomRatePrivate() {
			return $this->getField ( 41 );
		}
		// IN1-42 被保険者雇用状態
		public function getInsuredsEmploymentStatus() {
			return $this->getField ( 42 );
		}
		// IN1-43 被保険者性別
		public function getInsuredsSex() {
			return $this->getField ( 43 );
		}
		// IN1-44 被保険者雇用者住所
		public function getInsuredsEmployerAddress() {
			return $this->getField ( 44 );
		}
		// IN1-45 確認状態
		public function getVerificationStatus() {
			return $this->getField ( 45 );
		}
		// IN1-46 以前の保険プランID
		public function getPriorInsurancePlanID() {
			return $this->getField ( 46 );
		}
		// IN1-47 保険範囲タイプ
		public function getCoverageType() {
			return $this->getField ( 47 );
		}
		// IN1-48 ハンディキャップ
		public function getHandicap() {
			return $this->getField ( 48 );
		}
		// IN1-49 被保険者ID番号
		public function getInsuredsIDNumber() {
			return $this->getField ( 49 );
		}
		// IN1-50 署名コード
		public function getSignatureCode() {
			return $this->getField ( 50 );
		}
		// IN1-51 署名日
		public function getSignatureCodeDate() {
			return $this->getField ( 51 );
		}
		// IN1-52 被保険者出生地
		public function getInsuredsBirthPlace() {
			return $this->getField ( 52 );
		}
		// IN1-53 VIP識別
		public function getVIPIndicator() {
			return $this->getField ( 53 );
		}
	}
}
