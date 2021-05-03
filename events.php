<?php

namesapce ActionManager;

class Action{
	private static $actions = [];
	
	static function on($action, $fn){
		if(is_callable($fn)) self::$actions[$action][] = $fn;
	}

	static function trigger($action, ...$args){
		$ret = $args[0] ?? null;
		if(!empty(self::$actions[$action])){  
			foreach(self::$actions[$action] as $fn) 
				$ret = call_user_func_array($fn, $args);
		}
		
		return $ret;
	}
}
