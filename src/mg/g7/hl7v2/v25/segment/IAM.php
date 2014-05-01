<?php

namespace mg\g7\hl7v2\v25\segment {

	use mg\g7\hl7v2\v25\GenericSegment;
	use mg\g7\Exception;

	const V25_IAM_FIELDS_NUM = 21;
	class IAM extends GenericSegment {
		public function __construct($fields, $encodingCharacter) {
			parent::__construct ( $fields, $encodingCharacter );
			$this->addField ( "ST", $fields [0], 3,  false );
			$this->addField ( "SI", $fields [1], 4,  false );
			$this->addField ( "CWE", $fields [2], 250,  false );
			$this->addField ( "CWE", $fields [3], 250,  false );
			$this->addField ( "CWE", $fields [4], 250,  false );
			$this->addField ( "ST", $fields [5], 15,  true );
			$this->addField ( "CNE", $fields [6], 250,  false );
			$this->addField ( "EI", $fields [7], 427,  false );
			$this->addField ( "ST", $fields [8], 60,  false );
			$this->addField ( "CWE", $fields [9], 250,  false );
			$this->addField ( "CWE", $fields [10], 250,  false );
			$this->addField ( "DT", $fields [11], 8,  false );
			$this->addField ( "ST", $fields [12], 60,  false );
			$this->addField ( "TS", $fields [13], 8,  false );
			$this->addField ( "XPN", $fields [14], 250,  false );
			$this->addField ( "CWE", $fields [15], 250,  false );
			$this->addField ( "CWE", $fields [16], 250,  false );
			$this->addField ( "CWE", $fields [17], 250,  false );
			$this->addField ( "XCN", $fields [18], 250,  false );
			$this->addField ( "XON", $fields [19], 250,  false );
			$this->addField ( "TS", $fields [20], 8,  false );
		}
		public function parse() {
			if (count ( $this->fields ) < V25_IAM_FIELDS_NUM) {
				throw new Exception ( __CLASS__ . " FIELDS LACK :" . count ( $this->fields ) );
			}
			parent::_parse ();
		}
		// IAM-0 セグメントID
		public function getSegmentId() {
			return $this->getField ( 0 );
		}
		// IAM-1 セットID-IAM
		public function getSetIdIam() {
			return $this->getField ( 1 );
		}
		// IAM-2 アレルゲン分類
		public function getAllergenTypeCode() {
			return $this->getField ( 2 );
		}
		// IAM-3 アレルゲン情報
		public function getAllergenCodeMnemonicDescription() {
			return $this->getField ( 3 );
		}
		// IAM-4 アレルギー重症度
		public function getAllergySeverityCode() {
			return $this->getField ( 4 );
		}
		// IAM-5 アレルギー反応情報
		public function getAllergyReactionCode() {
			return $this->getField ( 5 );
		}
		// IAM-6 アレルギーアクションコード
		public function getAllergyActionCode() {
			return $this->getField ( 6 );
		}
		// IAM-7 アレルギー識別情報
		public function getAllergyUniqueIdentifier() {
			return $this->getField ( 7 );
		}
		// IAM-8 アレルギー情報追加・変更理由
		public function getActionReason() {
			return $this->getField ( 8 );
		}
		// IAM-9 アレルギー物質に対する感受性
		public function getSensitivityToCausativeAgentCode() {
			return $this->getField ( 9 );
		}
		// IAM-10 アレルゲン群情報
		public function getAllergenGroupCodeMnemonicDescription() {
			return $this->getField ( 10 );
		}
		// IAM-11 アレルギー発症日
		public function getOnsetDate() {
			return $this->getField ( 11 );
		}
		// IAM-12 アレルギー発症時期
		public function getOnsetDateText() {
			return $this->getField ( 12 );
		}
		// IAM-13 情報提供日時
		public function getReportedTime() {
			return $this->getField ( 13 );
		}
		// IAM-14 情報提供者
		public function getReportedBy() {
			return $this->getField ( 14 );
		}
		// IAM-15 情報提供者と患者の続柄
		public function getRelationshipToPatientCode() {
			return $this->getField ( 15 );
		}
		// IAM-16 要注意物質コード
		public function getAlertDeviceCode() {
			return $this->getField ( 16 );
		}
		// IAM-17 アレルギー臨床確認状況
		public function getAllergyClinicalStatusCode() {
			return $this->getField ( 17 );
		}
		// IAM-18 確認者
		public function getStatusedByPerson() {
			return $this->getField ( 18 );
		}
		// IAM-19 確認機関
		public function getStatusedByOrganization() {
			return $this->getField ( 19 );
		}
		// IAM-20 確認日時
		public function getStatusedAtTime() {
			return $this->getField ( 20 );
		}
	}
}
