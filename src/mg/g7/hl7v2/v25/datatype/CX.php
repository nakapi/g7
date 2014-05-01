<?php

namespace mg\g7\hl7v2\v25\datatype {

	use mg\g7\hl7v2\v25\GenericField;

	define ( "V25_DT_CX_COMPONENT_MAX", 10 );
	/**
	 * データ型:チェックデジット付拡張複合ID
	 * JAHIS 臨床検査データ交換規約Ver3.0
	 * SEQ1 ID番号 LEN:15 DT:ST OPT:R
	 * SEQ2 チェックデジット番号 LEN:1 DT:ST OPT:O
	 * SEQ3 チェックデジット形式 LEN:3 DT:ID OPT:O
	 * SEQ4 割当権限者 LEN:227 DT:HD OPT:O
	 * SEQ5 識別子型コード LEN:5 DT:ID OPT:O
	 * SEQ6 割当施設 LEN:227 DT:HD OPT:O
	 * SEQ7 発行日付 LEN:8 DT:DT OPT:O
	 * SEQ8 失効日付 LEN:8 DT:DT OPT:O
	 * SEQ9 割当管轄 LEN:705 DT:CWE OPT:O
	 * SEQ10 割当期間または行政組織 LEN:705 DT:CWE OPT:O
	 *
	 * JAHIS 病名情報データ交換規約Ver2.0
	 * SEQ1 ID LEN: DT:ST OPT:
	 * SEQ2 チェックデジット番号 LEN: DT:ST OPT:
	 * SEQ3 チェックデジット方式 LEN: DT:ID OPT:
	 * SEQ4 割当権限者 LEN: DT:HD OPT:
	 * SEQ5 IDタイプコード LEN: DT:IS OPT:
	 * SEQ6 割当施設 LEN: DT:HD OPT:
	 * SEQ7 発行日付 LEN: DT:DT OPT:
	 * SEQ8 満了日付 LEN: DT:DT OPT:
	 *
	 * HL7 Ver2.5
	 * SEQ1 ID LEN: DT:ST OPT:
	 * SEQ2 チェックデジット番号 LEN: DT:ST OPT:
	 * SEQ3 チェックデジット方式 LEN: DT:ID OPT:
	 * SEQ4 割当権限者 LEN: DT:HD OPT:
	 * SEQ5 IDタイプコード LEN: DT:ID OPT:
	 * SEQ6 割当施設 LEN: DT:HD OPT:
	 * SEQ7 発行日付 LEN: DT:DT OPT:
	 * SEQ8 満了日付 LEN: DT:DT OPT:
	 * SEQ9 割当管轄 LEN: DT:CWE OPT:O
	 * SEQ10 割当期間または行政組織 LEN: DT:CWE OPT:O
	 * 
	 * SUBSEQ1 Assigning Authority DT:HD
	 * SUBSEQ2 Assigning Facility DT:HD
	 * 
	 *        
	 */
	class CX extends GenericField {
		private $idNumber; // SEQ1 ID番号
		private $checkDigit; // SEQ2 チェックデジット
		private $checkDigitScheme; // SEQ3 チェックデジット形式
		private $assigningAuthority; // SEQ4 割当権限者
		private $identifierTypeCode; // SEQ5 識別子型コード
		private $assigningFacility; // SEQ6 割当施設
		private $effectiveDate; // SEQ7 発行日付
		private $expirationDate; // SEQ8 失効日付
		private $assigningJurisdiction; // SEQ9 割当管轄
		private $assigningAgencyOrDepartment; // SEQ10 割当期間また行政組織
		public function parse() {
			parent::validate ();
			$this->idNumber = $this->components [0];
			$this->checkDigit = $this->components [1];
			$this->checkDigitScheme = $this->components [2];
			$this->assigningAuthority = $this->components [3];
			$this->identifierTypeCode = $this->components [4];
			$this->assigningFacility = $this->components [5];
			$this->effectiveDate = $this->components [6];
			$this->expirationDate = $this->components [7];
			$this->assigningJurisdiction = $this->components [8];
			$this->assigningAgencyOrDepartment = $this->components [9];
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
		public function getEffectiveDate() {
			return $this->effectiveDate;
		}
		public function getExpirationDate() {
			return $this->expirationDate;
		}
		public function getAssigningJurisdiction() {
			return $this->assigningJurisdiction;
		}
		public function getAssigningAgencyOrDepartment() {
			return $this->assigningAgencyOrDepartment;
		}
	}
}