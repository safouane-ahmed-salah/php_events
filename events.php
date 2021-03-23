<?php

function _on($action, $fn){
	global $__ACTIONS;
	if(is_callable($fn)) $__ACTIONS[$action][] = $fn;
}

function _trigger($action, ...$args){
	global $__ACTIONS;
	$ret = $args[0] ?? null;
	if(!empty($__ACTIONS[$action])){  
		foreach($__ACTIONS[$action] as $fn) 
			$ret = call_user_func_array($fn, $args);
	}
	
	return $ret;
}
