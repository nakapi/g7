<?php

namespace mg\g7 {

	define ( "MSG_FIELDS_MIN_NUM", 12 );
	define ( "SEGMENT_SEPARATOR", "\r" );
	class GenericParser implements Parser {
		private static $fieldSeparator;
		private static $msgType;
		private static $versionObj;
		public function parse($msg) {
			mb_internal_encoding("UTF-8");
			self::_parse ( $msg );
			$msgFactoryClass = __NAMESPACE__ . "\\hl7v2\\v" . self::$versionObj->trim () . "\\" . "GenericMessageFactory";
			$msgFactory = new $msgFactoryClass ();
			$msgObj = $msgFactory->create ( self::trimMsgType () );
			$msgStruct = $msgObj->parse ( $msg );
			return $msgStruct;
		}
		private function _parse($msg) {
			if (strlen ( $msg ) < 4) {
				throw new Exception ( "Message Length Short", 5 );
			}
			if (substr ( $msg, 0, 3 ) !== "MSH") {
				throw new Exception ( "MSH no setting" );
			}
			self::$fieldSeparator = substr ( $msg, 3, 1 );
			$segments = explode ( SEGMENT_SEPARATOR, $msg );
			$fields = explode ( self::$fieldSeparator, $segments [0] );
			if (count ( $fields ) < MSG_FIELDS_MIN_NUM) {
				throw new Exception ( "MSH Message Short" );
			}
			self::$msgType = $fields [8];
			if (! isset ( self::$msgType )) {
				throw new Exception ( "MSH MSGTYPE not defined" );
			}
			$version = $fields [11];
			self::$versionObj = new Version ( $version );
			if (! self::$versionObj->isSupport ()) {
				throw new Exception ( "Version is not support:" . $version );
			}
			return $segments;
		}
		public function getFieldSeparator() {
			return self::$fieldSeparator;
		}
		public function trimMsgType() {
			$data = explode ( '^', self::$msgType );
			return $data [2];
		}
	}
}
