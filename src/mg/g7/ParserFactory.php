<?php

namespace mg\g7 {

	abstract class ParserFactory {
		public function create() {
			$factory = $this->createParser ();
			return $factory;
		}
		abstract public function createParser();
	}
}
