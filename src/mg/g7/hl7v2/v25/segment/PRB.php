<?php

namespace mg\g7\hl7v2\v25\segment {

	use mg\g7\hl7v2\v25\GenericSegment;
	use mg\g7\Exception;

	const V25_PRB_FIELDS_NUM = 26;
	class PRB extends GenericSegment {
		public function __construct($fields, $encodingCharacter) {
			parent::__construct ( $fields, $encodingCharacter );
			$this->addField ( "ST", $fields [0], 3,  false );
			$this->addField ( "ID", $fields [1], 2,  false );
			$this->addField ( "TS", $fields [2], 26,  false );
			$this->addField ( "CWE", $fields [3], 250,  false );
			$this->addField ( "EI", $fields [4], 60,  false );
			$this->addField ( "EI", $fields [5], 60,  false );
			$this->addField ( "NM", $fields [6], 60,  false );
			$this->addField ( "TS", $fields [7], 26,  false );
			$this->addField ( "TS", $fields [8], 26,  false );
			$this->addField ( "TS", $fields [9], 26,  false );
			$this->addField ( "CWE", $fields [10], 250,  false );
			$this->addField ( "CWE", $fields [11], 250,  true );
			$this->addField ( "CWE", $fields [12], 250,  false );
			$this->addField ( "CWE", $fields [13], 250,  false );
			$this->addField ( "CWE", $fields [14], 250,  false );
			$this->addField ( "TS", $fields [15], 26,  false );
			$this->addField ( "TS", $fields [16], 26,  false );
			$this->addField ( "ST", $fields [17], 80,  false );
			$this->addField ( "CWE", $fields [18], 250,  false );
			$this->addField ( "CWE", $fields [19], 250,  false );
			$this->addField ( "NM", $fields [20], 5,  false );
			$this->addField ( "CWE", $fields [21], 250,  false );
			$this->addField ( "CWE", $fields [22], 250,  false );
			$this->addField ( "CWE", $fields [23], 250,  false );
			$this->addField ( "ST", $fields [24], 250,  false );
			$this->addField ( "CWE", $fields [25], 250,  false );
		}
		public function parse() {
			if (count ( $this->fields ) < V25_PRB_FIELDS_NUM) {
				throw new Exception ( __CLASS__ . " FIELDS LACK :" . count ( $this->fields ) );
			}
			parent::_parse ();
		}
		// PRB-0 セグメントID
		public function getSegmentId() {
			return $this->getField ( 0 );
		}
		// PRB-1 アクションコード
		public function getActionCode() {
			return $this->getField ( 1 );
		}
		// PRB-2 アクション日付／時刻
		public function getActionTime() {
			return $this->getField ( 2 );
		}
		// PRB-3 プロブレムID
		public function getProblemID() {
			return $this->getField ( 3 );
		}
		// PRB-4 プロブレムインスタンスID
		public function getProblemInstanceID() {
			return $this->getField ( 4 );
		}
		// PRB-5 ケアID のエピソード
		public function getEpisodeOfCareID() {
			return $this->getField ( 5 );
		}
		// PRB-6 プロブレム一覧表優先権
		public function getProblemListPriority() {
			return $this->getField ( 6 );
		}
		// PRB-7 プロブレムを設定した日付／時刻
		public function getProblemEstablishedTime() {
			return $this->getField ( 7 );
		}
		// PRB-8 予期されるプロブレム解決日付／時刻
		public function getAnticipatedProblemResolutionTime() {
			return $this->getField ( 8 );
		}
		// PRB-9 実際のプロブレム解決日付／時刻
		public function getActualProblemResolutionTime() {
			return $this->getField ( 9 );
		}
		// PRB-10 プロブレム分類
		public function getProblemClassification() {
			return $this->getField ( 10 );
		}
		// PRB-11 プロブレムマネージメント分野
		public function getProblemManagementDiscipline() {
			return $this->getField ( 11 );
		}
		// PRB-12 プロブレムの後引き
		public function getProblemPersistence() {
			return $this->getField ( 12 );
		}
		// PRB-13 プロブレムの確認状態
		public function getProblemConfirmationStatus() {
			return $this->getField ( 13 );
		}
		// PRB-14 プロブレムのライフサイクル状態
		public function getProblemLifeCycleStatus() {
			return $this->getField ( 14 );
		}
		// PRB-15 プロブレムのライフサイクル状態の日付／時刻
		public function getProblemLifeCycleStatusTime() {
			return $this->getField ( 15 );
		}
		// PRB-16 プロブレムの発生日付
		public function getProblemDateOfOnset() {
			return $this->getField ( 16 );
		}
		// PRB-17 プロブレムの発生テキスト
		public function getProblemOnsetText() {
			return $this->getField ( 17 );
		}
		// PRB-18 プロブレムのランキング
		public function getProblemRanking() {
			return $this->getField ( 18 );
		}
		// PRB-19 プロブレムの確実性
		public function getCertaintyOfProblem() {
			return $this->getField ( 19 );
		}
		// PRB-20 プロブレムの可能性（0－1）
		public function getProbabilityOfProblem() {
			return $this->getField ( 20 );
		}
		// PRB-21 プロブレムの個々の認識
		public function getIndividualAwarenessOfProblem() {
			return $this->getField ( 21 );
		}
		// PRB-22 プロブレムの予後
		public function getProblemPrognosis() {
			return $this->getField ( 22 );
		}
		// PRB-23 予後の個々の認識
		public function getIndividualAwarenessOfPrognosis() {
			return $this->getField ( 23 );
		}
		// PRB-24 家族／プロブレムの重要な他の認識／予後
		public function getFamilySignificantOtherAwarenessOfProblemPrognosis() {
			return $this->getField ( 24 );
		}
		// PRB-25 安全保護／感度
		public function getSecuritySensitivity() {
			return $this->getField ( 25 );
		}
	}
}
