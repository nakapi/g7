<?php

namespace mg\g7 {

	class GenericParserFactory extends ParserFactory {
		public function createParser() {
			return new GenericParser ();
		}
	}
}
