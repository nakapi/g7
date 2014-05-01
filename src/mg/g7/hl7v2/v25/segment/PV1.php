<?php

namespace mg\g7\hl7v2\v25\segment {

	use mg\g7\hl7v2\v25\GenericSegment;
	use mg\g7\Exception;

	const V25_PV1_FIELDS_NUM = 53;
	class PV1 extends GenericSegment {
		public function __construct($fields, $encodingCharacter) {
			parent::__construct ( $fields, $encodingCharacter );
			$this->addField ( "ST", $fields [0], 3,  false );
			$this->addField ( "SI", $fields [1], 4,  false );
			$this->addField ( "IS", $fields [2], 1,  false );
			$this->addField ( "PL", $fields [3], 80,  false );
			$this->addField ( "IS", $fields [4], 2,  false );
			$this->addField ( "CX", $fields [5], 250,  false );
			$this->addField ( "PL", $fields [6], 80,  false );
			$this->addField ( "XCN", $fields [7], 250,  true );
			$this->addField ( "XCN", $fields [8], 250,  true );
			$this->addField ( "XCN", $fields [9], 250,  true );
			$this->addField ( "IS", $fields [10], 3,  false );
			$this->addField ( "PL", $fields [11], 80,  false );
			$this->addField ( "IS", $fields [12], 2,  false );
			$this->addField ( "IS", $fields [13], 2,  false );
			$this->addField ( "IS", $fields [14], 6,  false );
			$this->addField ( "IS", $fields [15], 2,  true );
			$this->addField ( "IS", $fields [16], 2,  false );
			$this->addField ( "XCN", $fields [17], 250,  true );
			$this->addField ( "IS", $fields [18], 2,  false );
			$this->addField ( "CX", $fields [19], 250,  false );
			$this->addField ( "FC", $fields [20], 50,  true );
			$this->addField ( "IS", $fields [21], 2,  false );
			$this->addField ( "IS", $fields [22], 2,  false );
			$this->addField ( "IS", $fields [23], 2,  false );
			$this->addField ( "IS", $fields [24], 2,  true );
			$this->addField ( "DT", $fields [25], 8,  true );
			$this->addField ( "NM", $fields [26], 12,  true );
			$this->addField ( "NM", $fields [27], 3,  true );
			$this->addField ( "IS", $fields [28], 2,  false );
			$this->addField ( "IS", $fields [29], 4,  false );
			$this->addField ( "DT", $fields [30], 8,  false );
			$this->addField ( "IS", $fields [31], 10,  false );
			$this->addField ( "NM", $fields [32], 12,  false );
			$this->addField ( "NM", $fields [33], 12,  false );
			$this->addField ( "IS", $fields [34], 1,  false );
			$this->addField ( "DT", $fields [35], 8,  false );
			$this->addField ( "IS", $fields [36], 3,  false );
			$this->addField ( "DLD", $fields [37], 47,  false );
			$this->addField ( "CWE", $fields [38], 250,  false );
			$this->addField ( "IS", $fields [39], 2,  false );
			$this->addField ( "IS", $fields [40], 1,  false );
			$this->addField ( "IS", $fields [41], 2,  false );
			$this->addField ( "PL", $fields [42], 80,  false );
			$this->addField ( "PL", $fields [43], 80,  false );
			$this->addField ( "TS", $fields [44], 26,  false );
			$this->addField ( "TS", $fields [45], 26,  true );
			$this->addField ( "NM", $fields [46], 12,  false );
			$this->addField ( "NM", $fields [47], 12,  false );
			$this->addField ( "NM", $fields [48], 12,  false );
			$this->addField ( "NM", $fields [49], 12,  false );
			$this->addField ( "CX", $fields [50], 250,  false );
			$this->addField ( "IS", $fields [51], 1,  false );
			$this->addField ( "XCN", $fields [52], 250,  true );
		}
		public function parse() {
			if (count ( $this->fields ) < V25_PV1_FIELDS_NUM) {
				throw new Exception ( __CLASS__ . " FIELDS LACK :" . count ( $this->fields ) );
			}
			parent::_parse ();
		}
		// PV1-0 セグメントID
		public function getSegmentId() {
			return $this->getField ( 0 );
		}
		// PV1-1 セットID-PV1
		public function getSetIdPv1() {
			return $this->getField ( 1 );
		}
		// PV1-2 患者区分
		public function getPatientClass() {
			return $this->getField ( 2 );
		}
		// PV1-3 患者所在場所
		public function getAssignedPatientLocation() {
			return $this->getField ( 3 );
		}
		// PV1-4 入院区分
		public function getAdmissionType() {
			return $this->getField ( 4 );
		}
		// PV1-5 事前入院番号
		public function getPreadmitNumber() {
			return $this->getField ( 5 );
		}
		// PV1-6 患者の以前の所在
		public function getPriorPatientLocation() {
			return $this->getField ( 6 );
		}
		// PV1-7 主治医
		public function getAttendingDoctor() {
			return $this->getField ( 7 );
		}
		// PV1-8 紹介医
		public function getReferringDoctor() {
			return $this->getField ( 8 );
		}
		// PV1-9 コンサルタント医師
		public function getConsultingDoctor() {
			return $this->getField ( 9 );
		}
		// PV1-10 診療部門
		public function getHospitalService() {
			return $this->getField ( 10 );
		}
		// PV1-11 一時的な所在場所
		public function getTemporaryLocation() {
			return $this->getField ( 11 );
		}
		// PV1-12 入院前検査標識
		public function getPreadmitTestIndicator() {
			return $this->getField ( 12 );
		}
		// PV1-13 再入院標識
		public function getReadmissionIndicator() {
			return $this->getField ( 13 );
		}
		// PV1-14 紹介元
		public function getAdmitSource() {
			return $this->getField ( 14 );
		}
		// PV1-15 外来状況
		public function getAmbulatoryStatus() {
			return $this->getField ( 15 );
		}
		// PV1-16 VIP標識
		public function getVipIndicator() {
			return $this->getField ( 16 );
		}
		// PV1-17 入院時医師
		public function getAdmittingDoctor() {
			return $this->getField ( 17 );
		}
		// PV1-18 患者種別
		public function getPatientType() {
			return $this->getField ( 18 );
		}
		// PV1-19 来院番号
		public function getVisitNumber() {
			return $this->getField ( 19 );
		}
		// PV1-20 保険種別
		public function getFinancialClass() {
			return $this->getField ( 20 );
		}
		// PV1-21 費用識別標識
		public function getChargePriceIndicator() {
			return $this->getField ( 21 );
		}
		// PV1-22 優待コード
		public function getCourtesyCode() {
			return $this->getField ( 22 );
		}
		// PV1-23 信用等級
		public function getCreditRating() {
			return $this->getField ( 23 );
		}
		// PV1-24 契約コード
		public function getContractCode() {
			return $this->getField ( 24 );
		}
		// PV1-25 契約発行日
		public function getContractEffectiveDate() {
			return $this->getField ( 25 );
		}
		// PV1-26 契約金額
		public function getContractAmount() {
			return $this->getField ( 26 );
		}
		// PV1-27 契約期間
		public function getContractPeriod() {
			return $this->getField ( 27 );
		}
		// PV1-28 利息コード
		public function getInterestCode() {
			return $this->getField ( 28 );
		}
		// PV1-29 不良負債転換コード
		public function getTransferToBadDebtCode() {
			return $this->getField ( 29 );
		}
		// PV1-30 不良負債転換日
		public function getTransferToBadDebtDate() {
			return $this->getField ( 30 );
		}
		// PV1-31 不良負債代理店コード
		public function getBadDebtAgencyCode() {
			return $this->getField ( 31 );
		}
		// PV1-32 不良負債転換額
		public function getBadDebtTransferAmount() {
			return $this->getField ( 32 );
		}
		// PV1-33 不良負債回収額
		public function getBadDebtRecoveryAmount() {
			return $this->getField ( 33 );
		}
		// PV1-34 会計情報削除標識
		public function getDeleteAccountIndicator() {
			return $this->getField ( 34 );
		}
		// PV1-35 会計情報削除日
		public function getDeleteAccountDate() {
			return $this->getField ( 35 );
		}
		// PV1-36 退院区分
		public function getDischargeDisposition() {
			return $this->getField ( 36 );
		}
		// PV1-37 退院先
		public function getDischargedToLocation() {
			return $this->getField ( 37 );
		}
		// PV1-38 食事種別
		public function getDietType() {
			return $this->getField ( 38 );
		}
		// PV1-39 担当施設
		public function getServicingFacility() {
			return $this->getField ( 39 );
		}
		// PV1-40 ベッド状態
		public function getBedStatus() {
			return $this->getField ( 40 );
		}
		// PV1-41 会計状態
		public function getAccountStatus() {
			return $this->getField ( 41 );
		}
		// PV1-42 保留所在場所
		public function getPendingLocation() {
			return $this->getField ( 42 );
		}
		// PV1-43 事前の一時的所在
		public function getPriorTemporaryLocation() {
			return $this->getField ( 43 );
		}
		// PV1-44 入院日時
		public function getAdmitDate() {
			return $this->getField ( 44 );
		}
		// PV1-45 退院日時
		public function getDischargeDate() {
			return $this->getField ( 45 );
		}
		// PV1-46 未納額
		public function getCurrentPatientBalance() {
			return $this->getField ( 46 );
		}
		// PV1-47 総費用
		public function getTotalCharges() {
			return $this->getField ( 47 );
		}
		// PV1-48 総調整額
		public function getTotalAdjustments() {
			return $this->getField ( 48 );
		}
		// PV1-49 合計支払額
		public function getTotalPayments() {
			return $this->getField ( 49 );
		}
		// PV1-50 代替来院ID
		public function getAlternateVisitID() {
			return $this->getField ( 50 );
		}
		// PV1-51 来院標識
		public function getVisitIndicator() {
			return $this->getField ( 51 );
		}
		// PV1-52 他のヘルスケア供給者
		public function getOtherHealthcareProvider() {
			return $this->getField ( 52 );
		}
	}
}
