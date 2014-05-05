<?php

namespace mg\g7\hl7v2\v25\segment {

	use mg\g7\hl7v2\v25\GenericSegment;
	use mg\g7\Exception;

	const V25_OBR_FIELDS_NUM = 50;
	class OBR extends GenericSegment {
		public function __construct($fields, $encodingCharacter) {
			parent::__construct ( $fields, $encodingCharacter );
			$this->addField ( "ST", $fields [0], 3, false );
			$this->addField ( "SI", $fields [1], 4, false );
			$this->addField ( "EI", $fields [2], 22, false );
			$this->addField ( "EI", $fields [3], 22, false );
			$this->addField ( "CWE", $fields [4], 250, false );
			$this->addField ( "ID", $fields [5], 2, false );
			$this->addField ( "TS", $fields [6], 26, false );
			$this->addField ( "TS", $fields [7], 26, false );
			$this->addField ( "TS", $fields [8], 26, true );
			$this->addField ( "CQ", $fields [9], 20, false );
			$this->addField ( "XCN", $fields [10], 250, true );
			$this->addField ( "ID", $fields [11], 1, false );
			$this->addField ( "CWE", $fields [12], 250, false );
			$this->addField ( "ST", $fields [13], 300, false );
			$this->addField ( "TS", $fields [14], 26, false );
			$this->addField ( "SPS", $fields [15], 300, false );
			$this->addField ( "XCN", $fields [16], 250, true );
			$this->addField ( "XTN", $fields [17], 250, true );
			$this->addField ( "ST", $fields [18], 60, false );
			$this->addField ( "ST", $fields [19], 60, false );
			$this->addField ( "ST", $fields [20], 60, false );
			$this->addField ( "ST", $fields [21], 60, false );
			$this->addField ( "TS", $fields [22], 26, false );
			$this->addField ( "MOC", $fields [23], 40, false );
			$this->addField ( "ID", $fields [24], 10, false );
			$this->addField ( "ID", $fields [25], 1, false );
			$this->addField ( "PRL", $fields [26], 400, false );
			$this->addField ( "TQ", $fields [27], 200, true );
			$this->addField ( "XCN", $fields [28], 250, true );
			$this->addField ( "EIP", $fields [29], 200, false );
			$this->addField ( "ID", $fields [30], 20, false );
			$this->addField ( "CWE", $fields [31], 250, true );
			$this->addField ( "NDL", $fields [32], 200, false );
			$this->addField ( "NDL", $fields [33], 200, true );
			$this->addField ( "NDL", $fields [34], 200, true );
			$this->addField ( "NDL", $fields [35], 200, true );
			$this->addField ( "TS", $fields [36], 26, false );
			$this->addField ( "NM", $fields [37], 4, false );
			$this->addField ( "CWE", $fields [38], 250, true );
			$this->addField ( "CWE", $fields [39], 250, true );
			$this->addField ( "CWE", $fields [40], 250, false );
			$this->addField ( "ID", $fields [41], 30, false );
			$this->addField ( "ID", $fields [42], 1, false );
			$this->addField ( "CWE", $fields [43], 250, true );
			$this->addField ( "CWE", $fields [44], 250, false );
			$this->addField ( "CWE", $fields [45], 250, true );
			$this->addField ( "CWE", $fields [46], 250, true );
			$this->addField ( "CWE", $fields [47], 250, true );
			$this->addField ( "CWE", $fields [48], 250, false );
			$this->addField ( "IS", $fields [49], 2, false );
		}
		public function parse() {
			if (count ( $this->fields ) < V25_OBR_FIELDS_NUM) {
				throw new Exception ( __CLASS__ . " FIELDS LACK :" . count ( $this->fields ) );
			}
			parent::_parse ();
		}
		// OBR-0 セグメントID
		public function getSegmentId() {
			return $this->getField ( 0 );
		}
		// OBR-1 セットID-OBR
		public function getSetIdObr() {
			return $this->getField ( 1 );
		}
		// OBR-2 依頼者オーダ番号
		public function getPlacerOrderNumber() {
			return $this->getField ( 2 );
		}
		// OBR-3 実施者オーダ番号
		public function getFillerOrderNumber() {
			return $this->getField ( 3 );
		}
		// OBR-4 検査項目ID
		public function getUniversalServiceId() {
			return $this->getField ( 4 );
		}
		// OBR-5 優先度
		public function getPriority() {
			return $this->getField ( 5 );
		}
		// OBR-6 要求日時
		public function getRequestedTime() {
			return $this->getField ( 6 );
		}
		// OBR-7 検査／採取日時
		public function getObservationTime() {
			return $this->getField ( 7 );
		}
		// OBR-8 検査／採取終了日時
		public function getObservationEndTime() {
			return $this->getField ( 8 );
		}
		// OBR-9 採取量
		public function getCollectionVolume() {
			return $this->getField ( 9 );
		}
		// OBR-10 採取者識別子
		public function getCollectorIdentifier() {
			return $this->getField ( 10 );
		}
		// OBR-11 検体処置コード
		public function getSpecimenActionCode() {
			return $this->getField ( 11 );
		}
		// OBR-12 危険(検体)コード
		public function getDangerCode() {
			return $this->getField ( 12 );
		}
		// OBR-13 関連臨床情報
		public function getRelevantClinicalInfo() {
			return $this->getField ( 13 );
		}
		// OBR-14 検体受理日時
		public function getSpecimenReceivedTime() {
			return $this->getField ( 14 );
		}
		// OBR-15 検体材料／採取部位
		public function getSpecimenSource() {
			return $this->getField ( 15 );
		}
		// OBR-16 依頼者
		public function getOrderingProvider() {
			return $this->getField ( 16 );
		}
		// OBR-17 オーダコールバック用電話番号
		public function getOrderCallbackPhoneNumber() {
			return $this->getField ( 17 );
		}
		// OBR-18 依頼者項目１
		public function getPlacerField1() {
			return $this->getField ( 18 );
		}
		// OBR-19 依頼者項目２
		public function getPlacerField2() {
			return $this->getField ( 19 );
		}
		// OBR-20 実施者項目１
		public function getFillerField1() {
			return $this->getField ( 20 );
		}
		// OBR-21 実施者項目２
		public function getFillerField2() {
			return $this->getField ( 21 );
		}
		// OBR-22 検査報告／状態変更-日時
		public function getResultsRptStatusChngTime() {
			return $this->getField ( 22 );
		}
		// OBR-23 課金
		public function getChargeToPractice() {
			return $this->getField ( 23 );
		}
		// OBR-24 診療部門ID
		public function getDiagnosticServSectId() {
			return $this->getField ( 24 );
		}
		// OBR-25 結果状態
		public function getResultStatus() {
			return $this->getField ( 25 );
		}
		// OBR-26 親結果
		public function getParentResult() {
			return $this->getField ( 26 );
		}
		// OBR-27 数量／タイミング
		public function getQuantityTiming() {
			return $this->getField ( 27 );
		}
		// OBR-28 結果配布先
		public function getResultCopiesTo() {
			return $this->getField ( 28 );
		}
		// OBR-29 親番号
		public function getParentNumber() {
			return $this->getField ( 29 );
		}
		// OBR-30 患者搬送モード
		public function getTransportationMode() {
			return $this->getField ( 30 );
		}
		// OBR-31 検査理由
		public function getReasonForStudy() {
			return $this->getField ( 31 );
		}
		// OBR-32 結果判定責任者
		public function getPrincipalResultInterpreter() {
			return $this->getField ( 32 );
		}
		// OBR-33 結果判定アシスタント
		public function getAssistantResultInterpreter() {
			return $this->getField ( 33 );
		}
		// OBR-34 医療技術者
		public function getTechnician() {
			return $this->getField ( 34 );
		}
		// OBR-35 口述記録者
		public function getTranscriptionist() {
			return $this->getField ( 35 );
		}
		// OBR-36 予定日時
		public function getScheduledTime() {
			return $this->getField ( 36 );
		}
		// OBR-37 検体容器数
		public function getNumberOfSampleContainers() {
			return $this->getField ( 37 );
		}
		// OBR-38 採取検体搬送
		public function getTransportLogisticsOfCollectedSample() {
			return $this->getField ( 38 );
		}
		// OBR-39 採取者コメント
		public function getCollectorsComment() {
			return $this->getField ( 39 );
		}
		// OBR-40 搬送調整者
		public function getTransportArrangementResponsibility() {
			return $this->getField ( 40 );
		}
		// OBR-41 搬送調整結果
		public function getTransportArranged() {
			return $this->getField ( 41 );
		}
		// OBR-42 随行者要否
		public function getEscortRequired() {
			return $this->getField ( 42 );
		}
		// OBR-43 患者搬送コメント
		public function getPlannedPatientTransportComment() {
			return $this->getField ( 43 );
		}
		// OBR-44 処置コード
		public function getProcedureCode() {
			return $this->getField ( 44 );
		}
		// OBR-45 処置コード修飾子
		public function getProcedureCodeModifier() {
			return $this->getField ( 45 );
		}
		// OBR-46 依頼者発行の追加サービス情報
		public function getPlacerSupplementalServiceInformation() {
			return $this->getField ( 46 );
		}
		// OBR-47 実施者発行の追加サービス情報
		public function getFillerSupplementalServiceInformation() {
			return $this->getField ( 47 );
		}
		// OBR-48 医学的に必要な重複処置の理由
		public function getMedicallyNecessaryDuplicateProcedureReason() {
			return $this->getField ( 48 );
		}
		// OBR-49 結果の取り扱い
		public function getResultHandling() {
			return $this->getField ( 49 );
		}
	}
}
