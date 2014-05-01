<?php

namespace mg\g7\hl7v2\v25\segment {

	use mg\g7\Segment;
	use mg\g7\Exception;
	use mg\g7\hl7v2\v25\GenericSegment;
	use mg\g7\FieldsAggregate;

	const V25_MSH_FIELDS_NUM = 21;
	/**
	 * MSHセグメント
	 * [SS-MIX2]
	 * MSH-0 セグメントID 「MSH」
	 * MSH-1 フィールド区切文字
	 * MSH-2 コード化文字 「^~\&」
	 * MSH-3 送信アプリケーション
	 * MSH-4 送信施設
	 * MSH-5 受信アプリケーション 「GW」
	 * MSH-6 送信施設
	 * MSH-7 メッセージ日時 「YYYYMMDDHHMMSS.[S[S[S[S]]]]」形式
	 * MSH-8 セキュリティ -
	 * MSH-9 メッセージ型
	 * MSH-10 メッセージ制御ID
	 * MSH-11 処理ID 「P」
	 * MSH-12 バージョンID 「2.5」
	 * MSH-13 シーケンス番号 -
	 * MSH-14 継続ポインタ -
	 * MSH-15 受諾肯定応答型 -
	 * MSH-16 アプリケーション肯定応答型 -
	 * MSH-17 国コード -
	 * MSH-18 文字セット 「~ISO IR87」
	 * MSH-19 主要言語 -
	 * MSH-20 代替文字セット操作法 「ISO 2022-1994」
	 * MSH-21 メッセージプロファイル識別子 -
	 *
	 *        
	 */
	class MSH extends GenericSegment {
		public function __construct($fields, $encodingCharacter) {
			parent::__construct ( $fields, $encodingCharacter );
			$this->addField ( "ST", $fields [0], 3,  false );
			$this->addField ( "ST", $fields [1], 1,  false );
			$this->addField ( "ST", $fields [2], 4,  false );
			$this->addField ( "HD", $fields [3], 227,  false );
			$this->addField ( "HD", $fields [4], 227,  false );
			$this->addField ( "HD", $fields [5], 227,  false );
			$this->addField ( "HD", $fields [6], 227,  false );
			$this->addField ( "TS", $fields [7], 26,  false );
			$this->addField ( "ST", $fields [8], 40,  false );
			$this->addField ( "MSG", $fields [9], 15,  false );
			$this->addField ( "ST", $fields [10], 20,  false );
			$this->addField ( "PT", $fields [11], 3,  false );
			$this->addField ( "VID", $fields [12], 60,  false );
			$this->addField ( "NM", $fields [13], 15,  false );
			$this->addField ( "ST", $fields [14], 180,  false );
			$this->addField ( "ID", $fields [15], 2,  false );
			$this->addField ( "ID", $fields [16], 2,  false );
			$this->addField ( "ID", $fields [17], 3,  false );
			$this->addField ( "ID", $fields [18], 16,  true );
			$this->addField ( "CWE", $fields [19], 250,  false );
			$this->addField ( "ID", $fields [20], 20,  false );
			$this->addField ( "EI", $fields [21], 427,  true );
		}
		public function parse() {
			parent::_parse ();
		}
		public function getSegmentId() {
			return $this->getField ( 0 );
		}
		public function getFieldSeparator() {
			return $this->getField ( 1 );
		}
		public function getCodingCharacter() {
			return $this->getField ( 2 );
		}
		public function getToApplication() {
			return $this->getField ( 3 );
		}
		public function getToInstitution() {
			return $this->getField ( 4 );
		}
		public function getFromApplication() {
			return $this->getField ( 5 );
		}
		public function getFromInstitution() {
			return $this->getField ( 6 );
		}
		public function getMessageDate() {
			return $this->getField ( 7 );
		}
		public function getSecurity() {
			return $this->getField ( 8 );
		}
		public function getMessageType() {
			return $this->getField ( 9 );
		}
		public function getMessageControlId() {
			return $this->getField ( 10 );
		}
		public function getProcessId() {
			return $this->getField ( 11 );
		}
		public function getVersion() {
			return $this->getField ( 12 );
		}
		public function getSeqId() {
			return $this->getField ( 13 );
		}
		public function getContinuationPoint() {
			return $this->getField ( 14 );
		}
		public function getAcceptanceAckType() {
			return $this->getField ( 15 );
		}
		public function getApplicationAckType() {
			return $this->getField ( 16 );
		}
		public function getCountryCode() {
			return $this->getField ( 17 );
		}
		public function getCharacterSet() {
			return $this->getField ( 18 );
		}
		public function getMajorLanguage() {
			return $this->getField ( 19 );
		}
		public function getAlternateCharacterSetProcedure() {
			return $this->getField ( 20 );
		}
		public function getMessageProfileId() {
			return $this->getField ( 21 );
		}
	}
}
