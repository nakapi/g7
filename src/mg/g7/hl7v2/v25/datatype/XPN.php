<?php

namespace mg\g7\hl7v2\v25\datatype {

	use mg\g7\hl7v2\v25\GenericField;

	define ( "V25_DT_XPN_COMPONENT_MAX", 14 );
	/**
	 * データ型:拡張人名
	 * JAHIS 臨床検査データ交換規約Ver3.0
	 * SEQ1 姓 LEN:194 DT:FN OPT:O
	 * SEQ2 名 LEN:30 DT:ST OPT:O
	 * SEQ3 2番目以降の名またはそれらのイニシャル LEN:30 DT:ST OPT:O
	 * SEQ4 接尾語 LEN:20 DT:ST OPT:O
	 * SEQ5 接頭語 LEN:20 DT:ST OPT:O
	 * SEQ6 学位 LEN:6 DT:IS OPT:B
	 * SEQ7 名前型コード LEN:1 DT:ID OPT:O
	 * SEQ8 名前表記コード LEN:1 DT:ID OPT:O
	 * SEQ9 名前の文脈 LEN:705 DT:CWE OPT:O
	 * SEQ10 名前の有効範囲 LEN:53 DT:DR OPT:B
	 * SEQ11 名前構成順序 LEN:1 DT:ID OPT:O
	 * SEQ12 発行日付 LEN:26 DT:TS OPT:O
	 * SEQ13 失効日付 LEN:26 DT:TS OPT:O
	 * SEQ14 専門職の接頭辞 LEN:199 DT:TS OPT:O
	 *
	 * JAHIS 病名情報データ交換規約Ver2.0
	 * SEQ1 姓 LEN: DT:FN OPT:
	 * SEQ2 洗礼名 LEN: DT:ST OPT:
	 * SEQ3 中間名のイニシャルあるいは名前 LEN: DT:ST OPT:
	 * SEQ4 接尾語 LEN: DT:ST OPT:
	 * SEQ5 接頭語 LEN: DT:ST OPT:
	 * SEQ6 学位 LEN: DT:ST OPT:
	 * SEQ7 名前タイプコード LEN: DT:ID OPT:
	 * SEQ8 名前表示コード LEN: DT:ID OPT:
	 * SEQ9 名前コンテキスト LEN: DT:CWE OPT:
	 * SEQ10 名前有効範囲 LEN: DT:DR OPT:
	 * SEQ11 名前の組み立て指示 LEN: DT:ID OPT:
	 *
	 *        
	 */
	class XPN extends GenericField {
		private $familyName; // SEQ1 姓
		private $givenName; // SEQ2 名
		private $secondAndFurtherGivenNamesOrInitialsThereof; // SEQ3 2番目以降の名またはそれらのイニシャル
		private $suffix; // SEQ4 接尾語
		private $prefix; // SEQ5 接頭語
		private $degree; // SEQ6 学位
		private $nameTypeCode; // SEQ7 名前型コード
		private $nameRepresentationCode; // SEQ8 名前表記コード
		private $nameContext; // SEQ9 名前の文脈
		private $nameValidityRange; // SEQ10 名前の有効範囲
		private $nameAssemblyOrder; // SEQ11 名前構成順序
		private $effectiveDate; // SEQ12 発行日付
		private $expirationDate; // SEQ13 失効日付
		private $professionalSuffix; // SEQ14 専門職の接頭辞
		public function parse() {
			parent::validate ();
			$this->familyName = $this->components [0];
			$this->givenName = $this->components [1];
			$this->secondAndFurtherGivenNamesOrInitialsThereof = $this->components [2];
			$this->suffix = $this->components [3];
			$this->prefix = $this->components [4];
			$this->degree = $this->components [5];
			$this->nameTypeCode = $this->components [6];
			$this->nameRepresentationCode = $this->components [7];
			$this->nameContext = $this->components [8];
			$this->nameValidityRange = $this->components [9];
			$this->nameAssemblyOrder = $this->components [10];
			$this->effectiveDate = $this->components [11];
			$this->expirationDate = $this->components [12];
			$this->professionalSuffix = $this->components [13];
		}
		public function getFamilyName() {
			return $this->familyName;
		}
		public function getGivenName() {
			return $this->givenName;
		}
		public function getSecondAndFurtherGivenNamesOrInitialsThereof() {
			return $this->secondAndFurtherGivenNamesOrInitialsThereof;
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
		public function getNameTypeCode() {
			return $this->nameTypeCode;
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
	}
}