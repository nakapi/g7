<?php

namespace mg\g7\hl7v2\v25\datatype {

	use mg\g7\hl7v2\v25\GenericField;

	define ( "V25_DT_ZRD_COMPONENT_MAX", 6 );
	/**
	 * データ型:放射線検査用薬剤やフイルムの情報
	 * JAHIS 放射線データ交換規約2.2
	 * SEQ1 識別子 LEN: DT:ST OPT:
	 * SEQ2 テキスト LEN: DT:ST OPT:
	 * SEQ3 コーディング方式名 LEN: DT:IS OPT:
	 * SEQ4 数量 LEN: DT:NM OPT:
	 * SEQ5 単位 LEN: DT:CWE OPT:
	 * SEQ6 ファイル分割数 LEN: DT:NM OPT:
	 */
	class ZRD extends GenericField {
		private $identifier; // SEQ1 識別子
		private $text; // SEQ2 テキスト
		private $nameOfEncodingSystem; // SEQ3 コーディング方式名
		private $quantity; // SEQ4 数量
		private $unit; // SEQ5 単位
		private $filmPartitionNumber; // SEQ6 ファイル分割数
		public function parse() {
			parent::validate ();
			$this->identifier = $this->components [0];
			$this->text = $this->components [1];
			$this->nameOfEncodingSystem = $this->components [2];
			$this->quantity = $this->components [3];
			$this->unit = $this->components [4];
			$this->filmPartitionNumber = $this->components [5];
		}
		public function getIdentifier() {
			return $this->identifier;
		}
		public function getText() {
			return $this->text;
		}
		public function getNameOfEncodingSystem() {
			return $this->nameOfEncodingSystem;
		}
		public function getQuantity() {
			return $this->quantity;
		}
		public function getUnit() {
			return $this->unit;
		}
		public function getFilmPartitionNumber() {
			return $this->filmPartitionNumber;
		}
	}
}