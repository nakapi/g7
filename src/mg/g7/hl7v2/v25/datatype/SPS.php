<?php

namespace mg\g7\hl7v2\v25\datatype {

	use mg\g7\hl7v2\v25\GenericField;

	define ( "V25_DT_SPS_COMPONENT_MAX", 7 );
	/**
	 * データ型:検査材料
	 * JAHIS 臨床検査データ交換規約Ver3.0
	 * SEQ1 検査材料名またはコード LEN: DT:CWE OPT:
	 * SEQ2 添加物 LEN: DT:CWE OPT:
	 * SEQ3 検体採取方法 LEN: DT:TX OPT:
	 * SEQ4 部位 LEN: DT:CWE OPT:
	 * SEQ5 部位修飾子 LEN: DT:CWE OPT:
	 * SEQ6 採取方法修飾子コード LEN: DT:CWE OPT:
	 * SEQ7 検体の役割 LEN: DT:CWE OPT:
	 */
	class SPS extends GenericField {
		private $specimenSourceNameOrCode; // SEQ1 検査材料またはコード
		private $additives; // SEQ2 添加物
		private $specimenCollectionMethod; // SEQ3 検体採取方法
		private $bodySite; // SEQ4 部位
		private $siteModifier; // SEQ5 部位修飾子
		private $collectionMethodModifierCode; // SEQ6 採取方法修飾子コード
		private $specimenRole; // SEQ7 検体の役割
		public function parse() {
			parent::validate ();
			$this->specimenSourceNameOrCode = $this->components [0];
			$this->additives = $this->components [1];
			$this->specimenCollectionMethod = $this->components [2];
			$this->bodySite = $this->components [3];
			$this->siteModifier = $this->components [4];
			$this->collectionMethodModifierCode = $this->components [5];
			$this->specimenRole = $this->components [6];
		}
		public function getSpecimenSourceNameOrCode() {
			return $this->specimenSourceNameOrCode;
		}
		public function getAdditives() {
			return $this->additives;
		}
		public function getSpecimenCollectionMethod() {
			return $this->specimenCollectionMethod;
		}
		public function getBodySite() {
			return $this->bodySite;
		}
		public function getSiteModifier() {
			return $this->siteModifier;
		}
		public function getCollectionMethodModifierCode() {
			return $this->collectionMethodModifierCode;
		}
		public function getSpecimenRole() {
			return $this->specimenRole;
		}
	}
}
