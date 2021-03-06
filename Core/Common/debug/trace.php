<?php


/**
 * 添加和获取页面Trace记录
 *
 * @param string  $value  变量
 * @param string  $label  标签
 * @param string  $level  日志级别
 * @param boolean $record 是否记录日志
 *
 * @return array|null
 */
function trace($value = null, $label = null, $level = 'DEBUG', $record = false){
	static $_trace = array();

	if(null === $value){ // 获取trace信息
		return $_trace;
	} else{
		switch($level){
		case '':
			$lv = 'info';
			break;
		default:
			$lv = 'default';
		}
		if($label){
			if($level == 'ERR' || TRACE_DEBUG){
				$safetrace = safe_get_function_stack();
				$label     = HTML::smlabel($label, $lv, [
														'data-trace'   => $safetrace,
														'onclick' => "trace_show(this)"
														]);
			} else{
				$label = HTML::smlabel($label, $lv);
			}
		} else{
			$label = trim($label);
		}
		if(!is_string($value)){
			$info = dump_some($value, 0);
		} else{
			$info = $value;
		}
		$level = strtoupper($level);
		if(!isset($_trace[$level])){
			$_trace[$level] = array();
		}
		$_trace[$level][] = [$label, $info];
		if((defined('IS_AJAX') && IS_AJAX) || PAGE_TRACE_SAVE || $record){
			Log::record($info, $level, $record);
		}

		return null;
	}
}
