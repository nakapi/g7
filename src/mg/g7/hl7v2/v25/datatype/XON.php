<?php

namespace mg\g7\hl7v2\v25\datatype {

	use mg\g7\hl7v2\v25\GenericField;

	define ( "V25_DT_XON_COMPONENT_MAX", 23 );
	/**
	 * データ型:拡張複合組織IDと名称
	 * JAHIS 臨床検査データ交換規約Ver3.0
	 * SEQ1 組織名称 LEN:50 DT:ST OPT:O
	 * SEQ2 組織名称型コード LEN:20 DT:IS OPT:O
	 * SEQ3 ID番号 LEN:4 DT:NM OPT:B
	 * SEQ4 チェックデジット LEN:1 DT:NM OPT:B
	 * SEQ5 チェックデジット体系 LEN:3 DT:ID OPT:O
	 * SEQ6 割当権限者 LEN:227 DT:HD OPT:O
	 * SEQ7 識別子型コード LEN:5 DT:ID OPT:O
	 * SEQ8 割当施設 LEN:227 DT:HD OPT:O
	 * SEQ9 名前表記コード LEN:1 DT:ID OPT:O
	 * SEQ10 組織識別子 LEN:20 DT:ST OPT:O
	 *
	 * JAHIS 病名情報データ交換規約Ver2.0
	 * SEQ1 組織名 LEN: DT:ST OPT:
	 * SEQ2 組織の名称タイプ LEN: DT:IS OPT:
	 * SEQ3 ID番号 LEN: DT:NM OPT:
	 * SEQ4 チェックデジット LEN: DT:NM OPT:
	 * SEQ5 チェックデジット方式 LEN: DT:ID OPT:
	 * SEQ6 割当権限者 LEN: DT:HD OPT:
	 * SEQ7 識別子型タイプ LEN: DT:IS OPT:
	 * SEQ8 割当施設ID LEN: DT:HD OPT:
	 * SEQ9 名前表示コード LEN: DT:ID OPT:
	 * 
	 *        
	 */
	class XON extends GenericField {
		private $organizationName; // SEQ1 組織名称
		private $organizationNameTypeCode; // SEQ2 組織名称型コード
		private $idNumber; // SEQ3 ID番号
		private $checkDigit; // SEQ4 チェックデジット
		private $checkDigitScheme; // SEQ5 チェックデジット体系
		private $assigningAuthority; // SEQ6 割当権限者
		private $identifierTypeCode; // SEQ7 識別子型コード
		private $assigningFacility; // SEQ8 割当施設
		private $nameRepresentationCode; // SEQ9 名前表記コード
		private $organizationIdentifier; // SEQ10 組織識別子
		public function parse() {
			parent::validate ();
			$this->organizationName = $this->components [0];
			$this->organizationNameTypeCode = $this->components [1];
			$this->idNumber = $this->components [2];
			$this->checkDigit = $this->components [3];
			$this->checkDigitScheme = $this->components [4];
			$this->assigningAuthority = $this->components [5];
			$this->identifierTypeCode = $this->components [6];
			$this->assigningFacility = $this->components [7];
			$this->nameRepresentationCode = $this->components [8];
			$this->organizationIdentifier = $this->components [9];
		}
		public function getOrganizationName() {
			return $this->organizationName;
		}
		public function getOrganizationNameTypeCode() {
			return $this->organizationNameTypeCode;
		}
		public function getIdNumber() {
			return $this->idNumber;
		}
		public function getCheckDigit() {
			return $this->checkDigit;
		}
		public function getCheckDigitScheme() {
			return $this->checkDigitScheme;
		}
		public function getAssigningAuthority() {
			return $this->assigningAuthority;
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
		public function getOrganizationIdentifier() {
			return $this->organizationIdentifier;
		}
	}
}