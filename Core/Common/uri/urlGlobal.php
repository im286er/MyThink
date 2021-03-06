<?php
/**
 * URL组装，跨项目
 *
 * @param string $app
 * @param string $action
 * @param string  $model
 * @param string  $path
 * @param array   $vars   传入的参数
 * @param string  $suffix 文件类型(html/json/...)
 * @param bool    $merge  如果是true，则把$_GET放进参数里
 *
 * @return string
 */
function UG($app = APP_NAME, $action = ACTION_NAME, $model = METHOD_NAME, $path = '', $vars = [], $suffix = DEFAULT_EXTENSION, $merge = false){
	global $helper;
	if(!$helper){
		$helper = ThinkInstance::UrlHelper();
	}
	if($merge){
		$vars = array_merge($_GET, $vars);
	}

	$helper->reset();
	$helper->setApp($app);
	$helper->setAction($action);
	$helper->setMethod($model);
	$helper->setProtocol('http');
	$helper->setParamAll($vars);
	$helper->setSuffix($suffix);
	$helper->setPath($path);

	return $helper->getUrl();
}

