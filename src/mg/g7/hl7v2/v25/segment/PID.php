<?php

namespace mg\g7\hl7v2\v25\segment {

	use mg\g7\hl7v2\v25\GenericSegment;
	use mg\g7\Exception;

	const V25_PID_FIELDS_NUM = 40;
	class PID extends GenericSegment {
		public function __construct($fields, $encodingCharacter) {
			parent::__construct ( $fields, $encodingCharacter );
			$this->addField ( "ST", $fields [0], 3,  false );
			$this->addField ( "SI", $fields [1], 4,  false );
			$this->addField ( "CX", $fields [2], 20,  false );
			$this->addField ( "CX", $fields [3], 250,  true );
			$this->addField ( "CX", $fields [4], 20,  true );
			$this->addField ( "XPN", $fields [5], 250,  true );
			$this->addField ( "XPN", $fields [6], 250,  true );
			$this->addField ( "TS", $fields [7], 26,  false );
			$this->addField ( "IS", $fields [8], 1,  false );
			$this->addField ( "XPN", $fields [9], 250,  true );
			$this->addField ( "CWE", $fields [10], 250,  true );
			$this->addField ( "XAD", $fields [11], 250,  true );
			$this->addField ( "IS", $fields [12], 4,  false );
			$this->addField ( "XTN", $fields [13], 250,  true );
			$this->addField ( "XTN", $fields [14], 250,  true );
			$this->addField ( "CWE", $fields [15], 250,  false );
			$this->addField ( "CWE", $fields [16], 250,  false );
			$this->addField ( "CWE", $fields [17], 250,  false );
			$this->addField ( "CX", $fields [18], 250,  false );
			$this->addField ( "ST", $fields [19], 16,  false );
			$this->addField ( "DLN", $fields [20], 25,  false );
			$this->addField ( "CX", $fields [21], 250,  true );
			$this->addField ( "CWE", $fields [22], 250,  true );
			$this->addField ( "ST", $fields [23], 250,  false );
			$this->addField ( "ID", $fields [24], 1,  false );
			$this->addField ( "NM", $fields [25], 2,  false );
			$this->addField ( "CWE", $fields [26], 250,  true );
			$this->addField ( "CWE", $fields [27], 250,  false );
			$this->addField ( "CWE", $fields [28], 250,  false );
			$this->addField ( "TS", $fields [29], 26,  false );
			$this->addField ( "ID", $fields [30], 1,  false );
			$this->addField ( "ID", $fields [31], 1,  false );
			$this->addField ( "IS", $fields [32], 20,  true );
			$this->addField ( "TS", $fields [33], 26,  false );
			$this->addField ( "HD", $fields [34], 241,  false );
			$this->addField ( "CWE", $fields [35], 250,  false );
			$this->addField ( "CWE", $fields [36], 250,  false );
			$this->addField ( "ST", $fields [37], 80,  false );
			$this->addField ( "CWE", $fields [38], 250,  true );
			$this->addField ( "CWE", $fields [39], 250,  true );
		}
		public function parse() {
			parent::_parse ();
		}
		// PID-0 セグメントID
		public function getSegmentId() {
			return $this->getField ( 0 );
		}
		// PID-1 セットID-PID
		public function getSetIdPid() {
			return $this->getField ( 1 );
		}
		// PID-2 患者ID
		public function getPatientId() {
			return $this->getField ( 2 );
		}
		// PID-3 患者IDリスト
		public function getPatientIdentifierList() {
			return $this->getField ( 3 );
		}
		// PID-4 代替患者ID
		public function getAlternatePatientId() {
			return $this->getField ( 4 );
		}
		// PID-5 患者氏名
		public function getPatientName() {
			return $this->getField ( 5 );
		}
		// PID-6 生年月日年齢
		public function getMothersMaidenName() {
			return $this->getField ( 6 );
		}
		// PID-7 生年月日年齢
		public function getDateOfBirth() {
			return $this->getField ( 7 );
		}
		// PID-8 性別
		public function getAdministrativeSex() {
			return $this->getField ( 8 );
		}
		// PID-9 患者別名
		public function getPatientAlias() {
			return $this->getField ( 9 );
		}
		// PID-10 人種
		public function getRace() {
			return $this->getField ( 10 );
		}
		// PID-11 患者住所
		public function getPatientAddress() {
			return $this->getField ( 11 );
		}
		// PID-12 郡コード
		public function getCountryCode() {
			return $this->getField ( 12 );
		}
		// PID-13 電話番号(自宅)
		public function getPhoneNumberHome() {
			return $this->getField ( 13 );
		}
		// PID-14 電話番号(勤務先)
		public function getPhoneNumberBusiness() {
			return $this->getField ( 14 );
		}
		// PID-15 使用言語
		public function getPrimaryLanguage() {
			return $this->getField ( 15 );
		}
		// PID-16 婚姻状況
		public function getMaritalStatus() {
			return $this->getField ( 16 );
		}
		// PID-17 宗教
		public function getReligion() {
			return $this->getField ( 17 );
		}
		// PID-18 宗教
		public function getPatientAccountNumber() {
			return $this->getField ( 18 );
		}
		// PID-19 社会保障番号
		public function getSsnNumber() {
			return $this->getField ( 19 );
		}
		// PID-20 運転免許証番号
		public function getDriversLicenseNumber() {
			return $this->getField ( 20 );
		}
		// PID-21 母親の識別情報
		public function getMothersIdentifier() {
			return $this->getField ( 21 );
		}
		// PID-22 民族
		public function getEthnicGroup() {
			return $this->getField ( 22 );
		}
		// PID-23 出生地
		public function getBirthPlace() {
			return $this->getField ( 23 );
		}
		// PID-24 多胎児識別情報
		public function getMultipleBirthIndicator() {
			return $this->getField ( 24 );
		}
		// PID-25 誕生順序
		public function getBirthOrder() {
			return $this->getField ( 25 );
		}
		// PID-26 市民権
		public function getCitizenship() {
			return $this->getField ( 26 );
		}
		// PID-27 退役軍人状況
		public function getVeteransMilitaryStatus() {
			return $this->getField ( 27 );
		}
		// PID-28 国籍
		public function getNationality() {
			return $this->getField ( 28 );
		}
		// PID-29 患者死亡日時
		public function getPatientDeathDate() {
			return $this->getField ( 29 );
		}
		// PID-30 患者死亡識別情報
		public function getPatientDeathIndicator() {
			return $this->getField ( 30 );
		}
		// PID-31 身元不明識別
		public function getIdentityUnknownIndicator() {
			return $this->getField ( 31 );
		}
		// PID-32 識別情報の信頼性
		public function getIdentityReliabilityCode() {
			return $this->getField ( 32 );
		}
		// PID-33 最終更新日時
		public function getLastUpdateDate() {
			return $this->getField ( 33 );
		}
		// PID-34 最終更新施設
		public function getLastUpdateFacility() {
			return $this->getField ( 34 );
		}
		// PID-35 種コード
		public function getSpeciesCode() {
			return $this->getField ( 35 );
		}
		// PID-36 品種コード
		public function getBreedCode() {
			return $this->getField ( 36 );
		}
		// PID-37 血統情報
		public function getStrain() {
			return $this->getField ( 37 );
		}
		// PID-38 生産分類コード
		public function getProductionClassCode() {
			return $this->getField ( 38 );
		}
		// PID-39 所属種族
		public function getTribalCitizenship() {
			return $this->getField ( 39 );
		}
	}
}
