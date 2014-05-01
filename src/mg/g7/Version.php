<?php

namespace mg\g7 {

	class Version {
		private static $supportVersion = array (
				"2.5" 
		);
		private static $version;
		function __construct($version) {
			self::$version = $version;
		}
		function isSupport() {
			foreach ( self::$supportVersion as $key => $var ) {
				if (self::$version === $var) {
					return true;
				}
			}
			return false;
		}
		function trim() {
			return str_replace ( '.', '', self::$version );
		}
	}
}
