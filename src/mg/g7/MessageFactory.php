<?php

namespace mg\g7 {

	abstract class MessageFactory {
		private static $messageObj;
		public function create($msgType) {
			return $this->createMessage ( $msgType );
		}
		abstract public function createMessage($msgType);
	}
}