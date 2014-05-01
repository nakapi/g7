<?php

namespace mg\g7\hl7v2\v25\datatype {

	use mg\g7\hl7v2\v25\GenericField;

	define ( "V25_DT_CWE_COMPONENT_MAX", 9 );
	/**
	 * データ型:例外を含むコード化値
	 * JAHIS 臨床検査データ交換規約Ver3.0
	 * SEQ1 識別子 LEN:20 DT:ST OPT:O
	 * SEQ2 テキスト LEN:199 DT:ST OPT:O
	 * SEQ3 コード体系名称 LEN:20 DT:ID OPT:O
	 * SEQ4 代替識別子 LEN:20 DT:ST OPT:O
	 * SEQ5 代替テキスト LEN:199 DT:ST OPT:O
	 * SEQ6 代替コード体系名称 LEN:20 DT:ID OPT:O
	 * SEQ7 コード体系バージョンID LEN:10 DT:ST OPT:C
	 * SEQ8 代替コード体系バージョンID LEN:10 DT:ST OPT:O
	 * SEQ9 元のテキスト LEN:199 DT:ST OPT:O
	 *
	 * JAHIS 病名情報データ交換規約Ver2.0
	 * SEQ1 識別子 LEN: DT:ST OPT:
	 * SEQ2 テキスト LEN: DT:ST OPT:
	 * SEQ3 コード方式名 LEN: DT:ID OPT:
	 * SEQ4 代替識別子 LEN: DT:ST OPT:
	 * SEQ5 代替テキスト LEN: DT:ST OPT:
	 * SEQ6 代替コーディング方式名 LEN: DT:ID OPT:
	 * SEQ7 コード体系バージョンID LEN:10 DT:ST OPT:
	 * SEQ8 代替コード方式バージョンID LEN: DT:ST OPT:
	 * SEQ9 オリジナルテキスト LEN: DT:ST OPT:
	 *
	 *        
	 */
	class CWE extends GenericField {
		private $identifier; // SEQ1 識別子
		private $text; // SEQ2 テキスト
		private $nameOfCodingSystem; // SEQ3 コード体系名称
		private $alternateIdentifier; // SEQ4 代替識別子
		private $alternateText; // SEQ5 代替テキスト
		private $nameOfAlternateCodingSystem; // SEQ6 代替コード体系名称
		private $codingSystemVersionId; // SEQ7 コード体系バージョンID
		private $alternateCodingSystemVersionId; // SEQ8 代替コード体系バージョンID
		private $originalText; // SEQ9 元のテキスト
		public function parse() {
			parent::validate ();
			$this->identifier = $this->components [0];
			$this->text = $this->components [1];
			$this->nameOfCodingSystem = $this->components [2];
			$this->alternateIdentifier = $this->components [3];
			$this->alternateText = $this->components [4];
			$this->nameOfAlternateCodingSystem = $this->components [5];
			$this->codingSystemVersionId = $this->components [6];
			$this->alternateCodingSystemVersionId = $this->components [7];
			$this->originalText = $this->components [8];
		}
		public function getIdentifier() {
			return $this->identifier;
		}
		public function getText() {
			return $this->text;
		}
		public function getNameOfCodingSystem() {
			return $this->nameOfCodingSystem;
		}
		public function getAlternateIdentifier() {
			return $this->alternateIdentifier;
		}
		public function getAlternateText() {
			return $this->alternateText;
		}
		public function getNameOfAlternateCodingSystem() {
			return $this->nameOfAlternateCodingSystem;
		}
		public function getCodingSystemVersionId() {
			return $this->codingSystemVersionId;
		}
		public function getAlternateCodingSystemVersionId() {
			return $this->alternateCodingSystemVersionId;
		}
		public function getOriginalText() {
			return $this->originalText;
		}
	}
}