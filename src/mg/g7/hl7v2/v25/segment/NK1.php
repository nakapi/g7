<?php

namespace mg\g7\hl7v2\v25\segment {

	use mg\g7\hl7v2\v25\GenericSegment;
	use mg\g7\Exception;

	const V25_NK1_FIELDS_NUM = 40;
	class NK1 extends GenericSegment {
		public function __construct($fields, $encodingCharacter) {
			parent::__construct ( $fields, $encodingCharacter );
			$this->addField ( "ST", $fields [0], 3,  false );
			$this->addField ( "SI", $fields [1], 4,  false );
			$this->addField ( "XPN", $fields [2], 250,  true );
			$this->addField ( "CWE", $fields [3], 250,  false );
			$this->addField ( "XAD", $fields [4], 250,  true );
			$this->addField ( "XTN", $fields [5], 250,  true );
			$this->addField ( "XTN", $fields [6], 250,  true );
			$this->addField ( "CWE", $fields [7], 250,  false );
			$this->addField ( "DT", $fields [8], 8,  false );
			$this->addField ( "DT", $fields [9], 8,  false );
			$this->addField ( "ST", $fields [10], 60,  false );
			$this->addField ( "JCC", $fields [11], 20,  false );
			$this->addField ( "CX", $fields [12], 250,  false );
			$this->addField ( "XON", $fields [13], 250,  true );
			$this->addField ( "CWE", $fields [14], 250,  false );
			$this->addField ( "IS", $fields [15], 1,  false );
			$this->addField ( "TS", $fields [16], 26,  false );
			$this->addField ( "IS", $fields [17], 2,  true );
			$this->addField ( "IS", $fields [18], 2,  true );
			$this->addField ( "CWE", $fields [19], 250,  true );
			$this->addField ( "CWE", $fields [20], 250,  false );
			$this->addField ( "IS", $fields [21], 2,  false );
			$this->addField ( "CWE", $fields [22], 250,  false );
			$this->addField ( "ID", $fields [23], 1,  false );
			$this->addField ( "IS", $fields [24], 2,  false );
			$this->addField ( "CWE", $fields [25], 250,  false );
			$this->addField ( "XPN", $fields [26], 250,  true );
			$this->addField ( "CWE", $fields [27], 250,  false );
			$this->addField ( "CWE", $fields [28], 250,  true );
			$this->addField ( "CWE", $fields [29], 250,  true );
			$this->addField ( "XPN", $fields [30], 250,  true );
			$this->addField ( "XTN", $fields [31], 250,  true );
			$this->addField ( "XAD", $fields [32], 250,  true );
			$this->addField ( "CX", $fields [33], 250,  true );
			$this->addField ( "IS", $fields [34], 2,  false );
			$this->addField ( "CWE", $fields [35], 250,  true );
			$this->addField ( "IS", $fields [36], 2,  false );
			$this->addField ( "ST", $fields [37], 16,  false );
			$this->addField ( "ST", $fields [38], 250,  false );
			$this->addField ( "IS", $fields [39], 2,  false );
		}
		public function parse() {
			if (count ( $this->fields ) < V25_NK1_FIELDS_NUM) {
				throw new Exception ( __CLASS__ . " FIELDS LACK :" . count ( $this->fields ) );
			}
			parent::_parse ();
		}
		// NK1-0 セグメントID
		public function getSegmentId() {
			return $this->getField ( 0 );
		}
		// NK1-1 セットID-NK1
		public function getSetIdNk1() {
			return $this->getField ( 1 );
		}
		// NK1-2 氏名
		public function getName() {
			return $this->getField ( 2 );
		}
		// NK1-3 続柄
		public function getRelationship() {
			return $this->getField ( 3 );
		}
		// NK1-4 住所
		public function getAddress() {
			return $this->getField ( 4 );
		}
		// NK1-5 電話番号
		public function getPhoneNumber() {
			return $this->getField ( 5 );
		}
		// NK1-6 勤務先電話番号
		public function getBusinessPhoneNumber() {
			return $this->getField ( 6 );
		}
		// NK1-7 役割
		public function getContactRole() {
			return $this->getField ( 7 );
		}
		// NK1-8 役割の開始日
		public function getStartDate() {
			return $this->getField ( 8 );
		}
		// NK1-9 役割の終了日
		public function getEndDate() {
			return $this->getField ( 9 );
		}
		// NK1-10 肩書
		public function getAssociatedPartiesJobTitle() {
			return $this->getField ( 10 );
		}
		// NK1-11 職種・職位
		public function getAssociatedPartiesJobCodeClass() {
			return $this->getField ( 11 );
		}
		// NK1-12 従業員番号
		public function getAssociatedPartiesEmployeeNumber() {
			return $this->getField ( 12 );
		}
		// NK1-13 所属組織名
		public function getOrganizationName() {
			return $this->getField ( 13 );
		}
		// NK1-14 結婚状態
		public function getMaritalStatus() {
			return $this->getField ( 14 );
		}
		// NK1-15 性別
		public function getAdministrativeSex() {
			return $this->getField ( 15 );
		}
		// NK1-16 生年月日
		public function getDateOfBirth() {
			return $this->getField ( 16 );
		}
		// NK1-17 生活依存
		public function getLivingDependancy() {
			return $this->getField ( 17 );
		}
		// NK1-18 介護区分
		public function getAmbulatoryStatus() {
			return $this->getField ( 18 );
		}
		// NK1-19 市民権情報
		public function getCitizenship() {
			return $this->getField ( 19 );
		}
		// NK1-20 使用言語
		public function getPrimaryLanguage() {
			return $this->getField ( 20 );
		}
		// NK1-21 生活様式
		public function getLivingArrangement() {
			return $this->getField ( 21 );
		}
		// NK1-22 周知標識
		public function getPublicityCode() {
			return $this->getField ( 22 );
		}
		// NK1-23 保護標識
		public function getProtectionIndicator() {
			return $this->getField ( 23 );
		}
		// NK1-24 学生標識
		public function getStudentIndicator() {
			return $this->getField ( 24 );
		}
		// NK1-25 宗教
		public function getReligion() {
			return $this->getField ( 25 );
		}
		// NK1-26 母親の旧姓
		public function getMothersMaidenName() {
			return $this->getField ( 26 );
		}
		// NK1-27 国籍
		public function getNationality() {
			return $this->getField ( 27 );
		}
		// NK1-28 民族
		public function getEthnicGroup() {
			return $this->getField ( 28 );
		}
		// NK1-29 連絡理由
		public function getContactReason() {
			return $this->getField ( 29 );
		}
		// NK1-30 連絡先の名前
		public function getContactPersonsName() {
			return $this->getField ( 30 );
		}
		// NK1-31 連絡先の電話番号
		public function getContactPersonsTelephoneNumber() {
			return $this->getField ( 31 );
		}
		// NK1-32 連絡先の住所
		public function getContactPersonsAddress() {
			return $this->getField ( 32 );
		}
		// NK1-33 近親者識別情報
		public function getAssociatedPartysIdentifiers() {
			return $this->getField ( 33 );
		}
		// NK1-34 職業状態
		public function getJobStatus() {
			return $this->getField ( 34 );
		}
		// NK1-35 人種
		public function getRace() {
			return $this->getField ( 35 );
		}
		// NK1-36 障害情報
		public function getHandicap() {
			return $this->getField ( 36 );
		}
		// NK1-37 連絡先の社会保障番号
		public function getContactPersonSocialSecurityNumber() {
			return $this->getField ( 37 );
		}
		// NK1-38 近親者生誕地
		public function getBirthPlace() {
			return $this->getField ( 38 );
		}
		// NK1-39 VIP標識
		public function getVipIndicator() {
			return $this->getField ( 39 );
		}
	}
}
