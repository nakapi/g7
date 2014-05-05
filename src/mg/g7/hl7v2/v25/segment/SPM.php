<?php

namespace mg\g7\hl7v2\v25\segment {

	use mg\g7\hl7v2\v25\GenericSegment;
	use mg\g7\Exception;

	const V25_SPM_FIELDS_NUM = 30;
	class SPM extends GenericSegment {
		public function __construct($fields, $encodingCharacter) {
			parent::__construct ( $fields, $encodingCharacter );
			$this->addField ( "ST", $fields [0], 3, false );
			$this->addField ( "SI", $fields [1], 4, false );
			$this->addField ( "EIP", $fields [2], 80, false );
			$this->addField ( "EIP", $fields [3], 80, true );
			$this->addField ( "CWE", $fields [4], 250, false );
			$this->addField ( "CWE", $fields [5], 250, true );
			$this->addField ( "CWE", $fields [6], 250, true );
			$this->addField ( "CWE", $fields [7], 250, false );
			$this->addField ( "CWE", $fields [8], 250, false );
			$this->addField ( "CWE", $fields [9], 250, true );
			$this->addField ( "CWE", $fields [10], 250, false );
			$this->addField ( "CWE", $fields [11], 250, true );
			$this->addField ( "CQ", $fields [12], 20, false );
			$this->addField ( "NM", $fields [13], 6, false );
			$this->addField ( "ST", $fields [14], 250, true );
			$this->addField ( "CWE", $fields [15], 250, true );
			$this->addField ( "CWE", $fields [16], 250, true );
			$this->addField ( "DR", $fields [17], 26, false );
			$this->addField ( "TS", $fields [18], 26, false );
			$this->addField ( "TS", $fields [19], 26, false );
			$this->addField ( "ID", $fields [20], 1, false );
			$this->addField ( "CWE", $fields [21], 250, true );
			$this->addField ( "CWE", $fields [22], 250, false );
			$this->addField ( "CWE", $fields [23], 250, false );
			$this->addField ( "CWE", $fields [24], 250, true );
			$this->addField ( "CQ", $fields [25], 20, false );
			$this->addField ( "NM", $fields [26], 4, false );
			$this->addField ( "CWE", $fields [27], 250, false );
			$this->addField ( "CWE", $fields [28], 250, false );
			$this->addField ( "CWE", $fields [29], 250, false );
		}
		public function parse() {
			if (count ( $this->fields ) < V25_SPM_FIELDS_NUM) {
				throw new Exception ( __CLASS__ . " FIELDS LACK :" . count ( $this->fields ) );
			}
			parent::_parse ();
		}
		// SPM-0 セグメントID
		public function getSegmentId() {
			return $this->getField ( 0 );
		}
		// SPM-1 セットID SPM
		public function getSetIdSpm() {
			return $this->getField ( 1 );
		}
		// SPM-2 検体ID
		public function getSpecimenId() {
			return $this->getField ( 2 );
		}
		// SPM-3 親検体ID
		public function getSpecimenParentIds() {
			return $this->getField ( 3 );
		}
		// SPM-4 検体タイプ
		public function getSpecimenType() {
			return $this->getField ( 4 );
		}
		// SPM-5 検体タイプ識別子
		public function getSpecimenTypeModifier() {
			return $this->getField ( 5 );
		}
		// SPM-6 検体添加物
		public function getSpecimenAdditives() {
			return $this->getField ( 6 );
		}
		// SPM-7 検体採取法
		public function getSpecimenCollectionMethod() {
			return $this->getField ( 7 );
		}
		// SPM-8 検査材料・検査部位
		public function getSpecimenSourceSite() {
			return $this->getField ( 8 );
		}
		// SPM-9 検査材料修飾子
		public function getSpecimenSourceSiteModifier() {
			return $this->getField ( 9 );
		}
		// SPM-10 検体採取部位
		public function getSpecimenCollectionSite() {
			return $this->getField ( 10 );
		}
		// SPM-11 検体役割
		public function getSpecimenRole() {
			return $this->getField ( 11 );
		}
		// SPM-12 検体採取量
		public function getSpecimenCollectionAmount() {
			return $this->getField ( 12 );
		}
		// SPM-13 検体総数
		public function getGroupedSpecimenCount() {
			return $this->getField ( 13 );
		}
		// SPM-14 検体記述
		public function getSpecimenDescription() {
			return $this->getField ( 14 );
		}
		// SPM-15 検体取扱いコード
		public function getSpecimenHandlingCode() {
			return $this->getField ( 15 );
		}
		// SPM-16 検体リスクコード
		public function getSpecimenRiskCode() {
			return $this->getField ( 16 );
		}
		// SPM-17 検体採取日時
		public function getSpecimenCollectionTime() {
			return $this->getField ( 17 );
		}
		// SPM-18 検体受領日時
		public function getSpecimenReceivedTime() {
			return $this->getField ( 18 );
		}
		// SPM-19 検体有効日時
		public function getSpecimenExpirationTime() {
			return $this->getField ( 19 );
		}
		// SPM-20 検体有効性
		public function getSpecimenAvailability() {
			return $this->getField ( 20 );
		}
		// SPM-21 検体拒否理由
		public function getSpecimenRejectReason() {
			return $this->getField ( 21 );
		}
		// SPM-22 検体品質
		public function getSpecimenQuality() {
			return $this->getField ( 22 );
		}
		// SPM-23 検体適合性
		public function getSpecimenAppropriateness() {
			return $this->getField ( 23 );
		}
		// SPM-24 検体条件
		public function getSpecimenCondition() {
			return $this->getField ( 24 );
		}
		// SPM-25 検体量
		public function getSpecimenCurrentQuantity() {
			return $this->getField ( 25 );
		}
		// SPM-26 検体容器数
		public function getNumberOfSpecimenContainers() {
			return $this->getField ( 26 );
		}
		// SPM-27 容器タイプ
		public function getContainerType() {
			return $this->getField ( 27 );
		}
		// SPM-28 容器状態
		public function getContainerCondition() {
			return $this->getField ( 28 );
		}
		// SPM-29 子検体役割
		public function getSpecimenChildRole() {
			return $this->getField ( 29 );
		}
	}
}
