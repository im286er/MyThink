<?php
echo_line('创建临时文件目录结构');
if(!is_dir(RUNTIME_PATH)){
	mkdir(RUNTIME_PATH, 0777, true);
}
if(!is_writeable(RUNTIME_PATH)){
	header('Content-Type:text/html; charset=utf-8');
	exit('目录 [ ' . RUNTIME_PATH . ' ] 不可写！');
}
if(!is_dir(RUNTIME_PATH.APP_NAME)){
	mkdir(RUNTIME_PATH.APP_NAME, 0777, true); // 模板缓存目录
}
if(!is_dir(CACHE_PATH)){
	mkdir(CACHE_PATH, 0777, true); // 模板缓存目录
}
if(!is_dir(LOG_PATH)){
	mkdir(LOG_PATH, 0777, true); // 日志目录
}
if(!is_dir(TEMP_PATH)){
	mkdir(TEMP_PATH, 0777, true); // 数据缓存目录
}
if(!is_dir(DATA_PATH)){
	mkdir(DATA_PATH, 0777, true); // 数据文件目录
}
if(!is_dir(CACHE_PATH.'meta')){
	mkdir(CACHE_PATH.'meta', 0777, true); // 类型信息缓存
}

