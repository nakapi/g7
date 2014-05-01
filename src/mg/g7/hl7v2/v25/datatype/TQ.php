<?php

namespace mg\g7\hl7v2\v25\datatype {

	use mg\g7\hl7v2\v25\GenericField;

	/**
	 * データ型:タイミング/量
	 * JAHIS 病名情報データ交換規約Ver2.0
	 * SEQ1 数量 LEN: DT:CQ OPT:O
	 * SEQ2 時間間隔 LEN: DT:CM OPT:O
	 * SEQ3 継続時間 LEN: DT:ST OPT:O
	 * SEQ4 開始日時 LEN: DT:TS OPT:O
	 * SEQ5 終了日時 LEN: DT:TS OPT:O
	 * SEQ6 優先度 LEN: DT:ST OPT:O
	 * SEQ7 条件 LEN: DT:ST OPT:O
	 * SEQ8 テキスト LEN: DT:TX OPT:O
	 * SEQ9 連結 LEN: DT:ID OPT:O
	 * SEQ10 オーダーシーケンス化 LEN: DT:CM OPT:O
	 * SEQ11 発生持続 LEN: DT:CWE OPT:O
	 * SEQ12 発生からの合計 LEN: DT:NM OPT:O
	 * 
	 *        
	 */
	class TQ extends GenericField {
		private $quantity; // SEQ1 数量
		private $interval; // SEQ2 時間間隔
		private $duration; // SEQ3 継続時間
		private $startTime; // SEQ4 開始日時
		private $endTime; // SEQ5 終了日時
		private $priority; // SEQ6 優先度
		private $condition; // SEQ7 条件
		private $text; // SEQ8 テキスト
		private $conjunction; // SEQ9 連結
		private $orderSequencing; // SEQ10 オーダーシーケンス化
		private $occurrenceDuration; // SEQ11 発生持続
		private $totalOccurrences; // SEQ12 発生からの合計

		public function parse() {
			parent::validate ();
			$this->quantity = $this->components[0];
			$this->interval = $this->components[1];
			$this->duration = $this->components[2];
			$this->startTime = $this->components[3];
			$this->endTime = $this->components[4];
			$this->priority = $this->components[5];
			$this->condition = $this->components[6];
			$this->text = $this->components[7];
			$this->conjunction = $this->components[8];
			$this->orderSequencing = $this->components[9];
			$this->occurrenceDuration = $this->components[10];
			$this->totalOccurrences = $this->components[11];
		}
		public function getQuantity(){
			return $this->quantity;
		}
		public function getInterval(){
			return $this->interval;
		}
		public function getDuration(){
			return $this->duration;
		}
		public function getStartTime(){
			return $this->startTime;
		}
		public function getEndTime(){
			return $this->endTime;
		}
		public function getPriority(){
			return $this->priority;
		}
		public function getCondition(){
			return $this->condition;
		}
		public function getText(){
			return $this->text;
		}
		public function getConjunction(){
			return $this->conjunction;
		}
		public function getOrderSequencing(){
			return $this->orderSequencing;
		}
		public function getOccurrenceDuration(){
			return $this->occurrenceDuration;
		}
		public function getTotalOccurrences(){
			return $this->totalOccurrences;
		}
	}
}
