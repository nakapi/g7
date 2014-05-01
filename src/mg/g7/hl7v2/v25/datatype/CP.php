<?php

namespace mg\g7\hl7v2\v25\datatype {

	use mg\g7\hl7v2\v25\GenericField;

	define ( "V25_DT_DT_COMPONENT_MAX", 6 );
	/**
	 * データ型:限度額ポリシー
	 * JAHIS 病名情報データ交換規約Ver2.0
	 * SEQ1 価格 LEN: DT:MO OPT:
	 * SEQ2 価格タイプ LEN: DT:ID OPT:
	 * SEQ3 始点の値 LEN: DT:NM OPT:
	 * SEQ4 終点の値 LEN: DT:NM OPT:
	 * SEQ5 範囲単位 LEN: DT:CWE OPT:
	 * SEQ6 範囲タイプ LEN: DT:ID OPT:
	 * 
	 * SUBSEQ1 QUANTITY
	 * SUBSEQ2 DENOMINATION
	 *
	 *        
	 */
	class CP extends GenericField {
		private $price; //SEQ1 価格
		private $priceType; //SEQ2 価格タイプ
		private $fromValue; //SEQ3 始点の値
		private $toValue; //SEQ4 終点の値
		private $rangeUnits; //SEQ5 範囲単位
		private $rangeType; //SEQ6 範囲タイプ
		public function parse() {
			parent::validate ();
			$this->price = $this->components[0];
			$this->priceType = $this->components[1];
			$this->fromValue = $this->components[2];
			$this->toValue = $this->components[3];
			$this->rangeUnits = $this->components[4];
			$this->rangeType = $this->components[5];
		}
		public function getPrice(){
			return $this->price;
		}
		public function getPriceType(){
			return $this->priceType;
		}
		public function getFromValue(){
			return $this->fromValue;
		}
		public function getToValue(){
			return $this->toValue;
		}
		public function getRangeUnits(){
			return $this->rangeUnits;
		}
		public function getRangeType(){
			return $this->rangeType;
		}
	}
}