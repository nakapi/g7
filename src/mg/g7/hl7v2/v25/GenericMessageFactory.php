<?php

namespace mg\g7\hl7v2\v25 {
	 use mg\g7\MessageFactory;
		class GenericMessageFactory extends MessageFactory{
		public function createMessage($msgType){
			$msgClass = __NAMESPACE__."\\message\\".$msgType;
			return new $msgClass();
		}
	}
}