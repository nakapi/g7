<?php

namespace mg\g7\hl7v2\v25\segment {

	use mg\g7\hl7v2\v25\GenericSegment;
	use mg\g7\Exception;

	const V25_ORC_FIELDS_NUM = 31;
	class ORC extends GenericSegment {
		public function __construct($fields, $encodingCharacter) {
			parent::__construct ( $fields, $encodingCharacter );
			$this->addField ( "ST", $fields [0], 3,  false );
			$this->addField ( "ID", $fields [1], 2,  false );
			$this->addField ( "EI", $fields [2], 22,  false );
			$this->addField ( "EI", $fields [3], 22,  false );
			$this->addField ( "EI", $fields [4], 22,  false );
			$this->addField ( "ID", $fields [5], 2,  false );
			$this->addField ( "ID", $fields [6], 1,  false );
			$this->addField ( "TQ", $fields [7], 200 ,  true );
			$this->addField ( "EIP", $fields [8], 200 ,  false );
			$this->addField ( "TS", $fields [9], 26 ,  false );
			$this->addField ( "XCN", $fields [10], 250 ,  true );
			$this->addField ( "XCN", $fields [11], 250 ,  true );
			$this->addField ( "XCN", $fields [12], 250 ,  true );
			$this->addField ( "PL", $fields [13], 80 ,  false );
			$this->addField ( "XTN", $fields [14], 250 ,  true );
			$this->addField ( "TS", $fields [15], 26 ,  false );
			$this->addField ( "CWE", $fields [16], 250 ,  false );
			$this->addField ( "CWE", $fields [17], 250 ,  false );
			$this->addField ( "CWE", $fields [18], 250 ,  false );
			$this->addField ( "XCN", $fields [19], 250 ,  true );
			$this->addField ( "CWE", $fields [20], 250 ,  false );
			$this->addField ( "XON", $fields [21], 250 ,  true );
			$this->addField ( "XAD", $fields [22], 250 ,  true );
			$this->addField ( "XTN", $fields [23], 250 ,  true );
			$this->addField ( "XAD", $fields [24], 250 ,  true );
			$this->addField ( "CWE", $fields [25], 250 ,  false );
			$this->addField ( "CWE", $fields [26], 60 ,  false );
			$this->addField ( "TS", $fields [27], 26 ,  false );
			$this->addField ( "CWE", $fields [28], 250 ,  false );
			$this->addField ( "CWE", $fields [29], 250 ,  false );
			$this->addField ( "CNE", $fields [30], 250 ,  false );
		}
		public function parse() {
			if (count ( $this->fields ) < V25_ORC_FIELDS_NUM) {
				throw new Exception ( __CLASS__ . " FIELDS LACK :" . count ( $this->fields ) );
			}
			parent::_parse ();
		}
		// ORC-0 セグメントID
		public function getSegmentId() {
			return $this->getField ( 0 );
		}
		// ORC-1 オーダ制御
		public function getOrderControl() {
			return $this->getField ( 1 );
		}
		// ORC-2 依頼者オーダ番号
		public function getPlacerOrderNumber() {
			return $this->getField ( 2 );
		}
		// ORC-3 実施者オーダ番号
		public function getFillerOrderNumber() {
			return $this->getField ( 3 );
		}
		// ORC-4 依頼者グループ番号
		public function getPlacerGroupNumber() {
			return $this->getField ( 4 );
		}
		// ORC-5 オーダ状態
		public function getOrderStatus() {
			return $this->getField ( 5 );
		}
		// ORC-6 応答フラグ
		public function getResponseFlag() {
			return $this->getField ( 6 );
		}
		// ORC-7 数量/タイミング
		public function getQuantityTiming() {
			return $this->getField ( 7 );
		}
		// ORC-8 親
		public function getParent() {
			return $this->getField ( 8 );
		}
		// ORC-9 トランザクション日時
		public function getTimeOfTransaction() {
			return $this->getField ( 9 );
		}
		// ORC-10 入力者
		public function getEnteredBy() {
			return $this->getField ( 10 );
		}
		// ORC-11 検証者
		public function getVerifiedBy() {
			return $this->getField ( 11 );
		}
		// ORC-12 依頼者
		public function getOrderingProvider() {
			return $this->getField ( 12 );
		}
		// ORC-13 入力場所
		public function getEnterersLocation() {
			return $this->getField ( 13 );
		}
		// ORC-14 コールバック用電話番号
		public function getCallBackPhoneNumber() {
			return $this->getField ( 14 );
		}
		// ORC-15 オーダ有効日時
		public function getOrderEffectiveTime() {
			return $this->getField ( 15 );
		}
		// ORC-16 オーダ制御コードの理由
		public function getOrderControlCodeReason() {
			return $this->getField ( 16 );
		}
		// ORC-17 入力組織
		public function getEnteringOrganization() {
			return $this->getField ( 17 );
		}
		// ORC-18 入力装置
		public function getEnteringDevice() {
			return $this->getField ( 18 );
		}
		// ORC-19 オーダ制御実施者
		public function getActionBy() {
			return $this->getField ( 19 );
		}
		// ORC-20 受益者事前通知コード
		public function getAdvancedBeneficiaryNoticeCode() {
			return $this->getField ( 20 );
		}
		// ORC-21 オーダ施設名
		public function getOrderingFacilityName() {
			return $this->getField ( 21 );
		}
		// ORC-22 オーダ施設住所
		public function getOrderingFacilityAddress() {
			return $this->getField ( 22 );
		}
		// ORC-23 オーダ施設電話番号
		public function getOrderingFacilityPhoneNumber() {
			return $this->getField ( 23 );
		}
		// ORC-24 オーダ依頼者住所
		public function getOrderingProviderAddress() {
			return $this->getField ( 24 );
		}
		// ORC-25 オーダ状態修飾子
		public function getOrderStatusModifier() {
			return $this->getField ( 25 );
		}
		// ORC-26 受益者事前通知無効理由
		public function getAdvancedBeneficiaryNoticeOverrideReason() {
			return $this->getField ( 26 );
		}
		// ORC-27 実施者可能日時
		public function getFillersExpectedAvailabilityTime() {
			return $this->getField ( 27 );
		}
		// ORC-28 守秘コード
		public function getConfidentialityCode() {
			return $this->getField ( 28 );
		}
		// ORC-29 オーダタイプ
		public function getOrderType() {
			return $this->getField ( 29 );
		}
		// ORC-30 入力者承認モード
		public function getEntererAuthorizationMode() {
			return $this->getField ( 30 );
		}
	}
}
