<?php

namespace mg\g7\hl7v2\v25\datatype {

	use mg\g7\hl7v2\v25\GenericField;

	define ( "V25_DT_XCN_COMPONENT_MAX", 23 );
	/**
	 * データ型:拡張複合IDと名前
	 * JAHIS 臨床検査データ交換規約Ver3.0
	 * SEQ1 ID番号 LEN:15 DT:ST OPT:O
	 * SEQ2 姓 LEN:194 DT:FN OPT:O
	 * SEQ3 名 LEN:30 DT:ST OPT:O
	 * SEQ4 2番目以降の名またはそれらのイニシャル LEN:30 DT:ST OPT:O
	 * SEQ5 接尾語 LEN:20 DT:ST OPT:O
	 * SEQ6 接頭語 LEN:20 DT:ST OPT:O
	 * SEQ7 学位 LEN:5 DT:IS OPT:B
	 * SEQ8 ID管理表 LEN:4 DT:IS OPT:C
	 * SEQ9 割当権限者 LEN:227 DT:HD OPT:O
	 * SEQ10 名前型コード LEN:1 DT:ID OPT:O
	 * SEQ11 識別子チェックデジット LEN:1 DT:ST OPT:O
	 * SEQ12 チェックデジット形式 LEN:3 DT:ID OPT:C
	 * SEQ13 識別子型コード LEN:5 DT:ID OPT:O
	 * SEQ14 割当施設 LEN:227 DT:HD OPT:O
	 * SEQ15 名前表記コード LEN:1 DT:ID OPT:O
	 * SEQ16 名前の文脈 LEN:705 DT:CWE OPT:O
	 * SEQ17 名前の有効範囲 LEN:53 DT:DR OPT:B
	 * SEQ18 名前構成順序 LEN:1 DT:ID OPT:O
	 * SEQ19 発行日付 LEN:26 DT:TS OPT:O
	 * SEQ20 失効日付 LEN:26 DT:TS OPT:O
	 * SEQ21 専門職の接頭辞 LEN:199 DT:ST OPT:O
	 * SEQ22 割当管轄 LEN:705 DT:CWE OPT:O
	 * SEQ23 割当顕現者または行政組織 LEN:705 DT:CWE OPT:O
	 *
	 * JAHIS 病名情報データ交換規約Ver2.0
	 * SEQ1 ID番号 LEN: DT:ST OPT:
	 * SEQ2 姓 LEN: DT:FN OPT:
	 * SEQ3 洗礼名 LEN: DT:ST OPT:
	 * SEQ4 セカンドネームまたはそれらのイニシャル LEN: DT:ST OPT:
	 * SEQ5 接尾語 LEN: DT:ST OPT:
	 * SEQ6 接頭語 LEN: DT:ST OPT:
	 * SEQ7 学位 LEN: DT:ST OPT:
	 * SEQ8 ソーステーブル LEN: DT:IS OPT:
	 * SEQ9 割当権限者 LEN: DT:HD OPT:
	 * SEQ10 名前タイプコード LEN: DT:ID OPT:
	 * SEQ11 チェックデジット LEN: DT:ST OPT:
	 * SEQ12 チェックデジット方式 LEN: DT:ID OPT:
	 * SEQ13 識別子タイプコード LEN: DT:IS OPT:
	 * SEQ14 割当施設 LEN: DT:HD OPT:
	 * SEQ15 名前表示コード LEN: DT:ID OPT:
	 * SEQ16 名前コンテキスト LEN: DT:CWE OPT:
	 * SEQ17 名前有効範囲 LEN: DT:DR OPT:
	 * SEQ18 名前組み立て指示 LEN: DT:ID OPT:
	 *        
	 */
	class XCN extends GenericField {
		private $idNumber; // SEQ1 ID番号
		private $familyName; // SEQ2 姓
		private $givenName; // SEQ3 名
		private $secondAndFurtherGivenNamesOfInitialsThreof; // SEQ4 2番目以降の名またはそれらのイニシャル
		private $suffix; // SEQ5 接尾語
		private $prefix; // SEQ6 接頭語
		private $degree; // SEQ7 学位
		private $sourceTable; // SEQ8 ID管理表
		private $assigningAuthority; // SEQ9 権限者
		private $nameTypeCode; // SEQ10 名前型コード
		private $identifierCheckDigit; // SEQ11 識別子チェックデジット
		private $checkDigitScheme; // SEQ12 チェックデジット形式
		private $identifierTypeCode; // SEQ13 識別子型コード
		private $assigningFacility; // SEQ14 割当施設
		private $nameRepresentationCode; // SEQ15 名前表記コード
		private $nameContext; // SEQ16 名前の文脈
		private $nameValidityRange; // SEQ17 名前の有効範囲
		private $nameAssemblyOrder; // SEQ18 名前構成順序
		private $effectiveDate; // SEQ19 発行日付
		private $expirationDate; // SEQ20 失効日付
		private $professionalSuffix; // SEQ21 専門職の接頭辞
		private $assigningJurisdiction; // SEQ22 割当管轄
		private $assigningAgencyOfDepartment; // SEQ23 割当権限者または行政組織
		public function parse() {
			parent::validate ();
			$this->idNumber = $this->components [0]; // SEQ1 ID番号
			$this->familyName = $this->components [1]; // SEQ2 姓
			$this->givenName = $this->components [2]; // SEQ3 名
			$this->secondAndFurtherGivenNamesOfInitialsThreof = $this->components [3]; // SEQ4 2番目以降の名またはそれらのイニシャル
			$this->suffix = $this->components [4]; // SEQ5 接尾語
			$this->prefix = $this->components [5]; // SEQ6 接頭語
			$this->degree = $this->components [6]; // SEQ7 学位
			$this->sourceTable = $this->components [7]; // SEQ8 ID管理表
			$this->assigningAuthority = $this->components [8]; // SEQ9 権限者
			$this->nameTypeCode = $this->components [9]; // SEQ10 名前型コード
			$this->identifierCheckDigit = $this->components [10]; // SEQ11 識別子チェックデジット
			$this->checkDigitScheme = $this->components [11]; // SEQ12 チェックデジット形式
			$this->identifierTypeCode = $this->components [12]; // SEQ13 識別子型コード
			$this->assigningFacility = $this->components [13]; // SEQ14 割当施設
			$this->nameRepresentationCode = $this->components [14]; // SEQ15 名前表記コード
			$this->nameContext = $this->components [15]; // SEQ16 名前の文脈
			$this->nameValidityRange = $this->components [16]; // SEQ17 名前の有効範囲
			$this->nameAssemblyOrder = $this->components [17]; // SEQ18 名前構成順序
			$this->effectiveDate = $this->components [18]; // SEQ19 発行日付
			$this->expirationDate = $this->components [19]; // SEQ20 失効日付
			$this->professionalSuffix = $this->components [20]; // SEQ21 専門職の接頭辞
			$this->assigningJurisdiction = $this->components [21]; // SEQ22 割当管轄
			$this->assigningAgencyOfDepartment = $this->components [22]; // SEQ23 割当権限者または行政組織
		}
		public function getIdNumber() {
			return $this->idNumber;
		}
		public function getFamilyName() {
			return $this->familyName;
		}
		public function getGivenName() {
			return $this->givenName;
		}
		public function getSecondAndFurtherGivenNamesOfInitialsThreof() {
			return $this->secondAndFurtherGivenNamesOfInitialsThreof;
		}
		public function getSuffix() {
			return $this->suffix;
		}
		public function getPrefix() {
			return $this->prefix;
		}
		public function getDegree() {
			return $this->degree;
		}
		public function getSourceTable() {
			return $this->sourceTable;
		}
		public function getAssigningAuthority() {
			return $this->assigningAuthority;
		}
		public function getNameTypeCode() {
			return $this->nameTypeCode;
		}
		public function getIdentifierCheckDigit() {
			return $this->identifierCheckDigit;
		}
		public function getCheckDigitScheme() {
			return $this->checkDigitScheme;
		}
		public function getIdentifierTypeCode() {
			return $this->identifierTypeCode;
		}
		public function getAssigningFacility() {
			return $this->assigningFacility;
		}
		public function getNameRepresentationCode() {
			return $this->nameRepresentationCode;
		}
		public function getNameContext() {
			return $this->nameContext;
		}
		public function getNameValidityRange() {
			return $this->nameValidityRange;
		}
		public function getNameAssemblyOrder() {
			return $this->nameAssemblyOrder;
		}
		public function getEffectiveDate() {
			return $this->effectiveDate;
		}
		public function getExpirationDate() {
			return $this->expirationDate;
		}
		public function getProfessionalSuffix() {
			return $this->professionalSuffix;
		}
		public function getAssigningJurisdiction() {
			return $this->assigningJurisdiction;
		}
		public function getAssigningAgencyOfDepartment() {
			return $this->assigningAgencyOfDepartment;
		}
	}
}