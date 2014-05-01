<?php

namespace mg\g7 {

	class Context {
		private static $parser;
		public function __construct() {
			$factory = new GenericParserFactory ();
			self::$parser = $factory->create ();
		}
		public function parse($msg) {
			return self::$parser->parse ( $msg );
		}
	}
}
