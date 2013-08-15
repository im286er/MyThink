<?php /* 调试文件 */
define('APP_DEBUG', true);
define('APP_NAME', 'test');
define('APP_PATH', '/data/web/MyThink/test/test_app/');
define('APP_STATUS', 'debug');
define('APP_SUB_DOMAIN_DEPLOY', '');
define('BASE_CONF_PATH', '/data/web/MyThink/test/base/Conf/');
define('BASE_LANG_PATH', '/data/web/MyThink/test/base/Lang/');
define('BASE_LIB_PATH', '/data/web/MyThink/test/base/');
define('BASE_TMPL_PATH', '/data/web/MyThink/test/base/Tpl/');
define('CACHE_PATH', '/data/web/MyThink/test/runtime/Cache/');
define('CONF_PATH', '/data/web/MyThink/test/test_app/Conf/');
define('COOKIE_DOMAIN', '');
define('COOKIE_EXPIRE', '1800');
define('COOKIE_PATH', '/');
define('COOKIE_PREFIX', '');
define('CORE_DEBUG', true);
define('CORE_PATH', '/data/web/MyThink/Core/Lib/');
define('DATA_CACHE_CHECK', '');
define('DATA_CACHE_COMPRESS', '');
define('DATA_CACHE_PREFIX', '');
define('DATA_CACHE_TIME', '0');
define('DATA_CACHE_TYPE', 'Memcached');
define('DATA_PATH', '/data/web/MyThink/test/runtime/Data/');
define('DB_CHARSET', 'utf8');
define('DB_DEPLOY_TYPE', '0');
define('DB_FIELDS_CACHE', '1');
define('DB_FIELDTYPE_CHECK', '');
define('DB_HOST', 'localhost');
define('DB_MASTER_NUM', '1');
define('DB_NAME', '');
define('DB_PORT', '');
define('DB_PREFIX', '');
define('DB_PWD', '');
define('DB_RW_SEPARATE', '');
define('DB_SLAVE_NO', '');
define('DB_SQL_BUILD_CACHE', '');
define('DB_SQL_BUILD_LENGTH', '20');
define('DB_SQL_BUILD_QUEUE', 'apc');
define('DB_SQL_LOG', '1');
define('DB_TYPE', 'mysqli');
define('DB_USER', 'root');
define('DEFAULT_AJAX_RETURN', 'JSON');
define('DEFAULT_APP', '@');
define('DEFAULT_JSONP_HANDLER', 'jsonpReturn');
define('DEFAULT_LANG', 'zh-cn');
define('ENTRY_FILE', '/data/web/MyThink/test/index.php');
define('EXTEND_PATH', '/data/web/MyThink/Extend/');
define('HTTP_CACHE_CONTROL', 'private');
define('LANG_ACTION', '操作');
define('LANG_ACTION_NOT_EXIST', '控制器不存在或者没有定义');
define('LANG_CACHE_TYPE_INVALID', '无法加载缓存类型');
define('LANG_CACHE_WRITE_ERROR', '缓存文件写入失败！');
define('LANG_CLASS_CONFLICT', '类名冲突');
define('LANG_CLASS_NOT_EXIST', '实例化一个不存在的类！');
define('LANG_DATA_TYPE_INVALID', '非法数据对象！');
define('LANG_ERROR_ACTION', '非法操作');
define('LANG_EXPRESS_ERROR', '表达式错误');
define('LANG_FILE_NOT_WRITEABLE', '目录（文件）不可写');
define('LANG_LANGUAGE_NOT_LOAD', '无法加载语言包');
define('LANG_METHOD_NOT_EXIST', '您所请求的方法不存在！');
define('LANG_MODEL_NOT_EXIST', '模型不存在或者没有定义');
define('LANG_MODULE', '模块');
define('LANG_MODULE_NOT_EXIST', '无法加载模块');
define('LANG_NOT_ALLOW_PHP', '模板禁用PHP代码');
define('LANG_NOT_LOAD_DB', '无法加载数据库');
define('LANG_NOT_SUPPERT', '系统不支持');
define('LANG_NOT_SUPPORT_DB', '系统暂时不支持数据库');
define('LANG_NO_DB_CONFIG', '没有定义数据库配置');
define('LANG_NO_DB_DRIVER', '无法加载数据库驱动');
define('LANG_OPERATION_FAIL', '操作失败！');
define('LANG_OPERATION_SUCCESS', '操作成功！');
define('LANG_OPERATION_WRONG', '操作出现错误');
define('LANG_PARAM_ERROR', '参数错误或者未定义');
define('LANG_PATH', '/data/web/MyThink/test/test_app/Lang/');
define('LANG_RECORD_HAS_UPDATE', '记录已经更新');
define('LANG_SELECT_NOT_EXIST', '记录不存在！');
define('LANG_TAGLIB_NOT_EXIST', '标签库未定义');
define('LANG_TEMPLATE_ERROR', '模板引擎错误');
define('LANG_TEMPLATE_NOT_EXIST', '模板不存在');
define('LANG_TOKEN_ERROR', '表单令牌错误');
define('LANG_VALID_ACCESS', '没有权限');
define('LANG_XML_TAG_ERROR', 'XML标签语法错误');
define('LIBRARY_PATH', '/data/web/MyThink/Extend/Library/');
define('LIB_PATH', '/data/web/MyThink/test/test_app/');
define('LOG_DEST', '');
define('LOG_EXCEPTION_RECORD', '1');
define('LOG_EXTRA', '');
define('LOG_FILE_SIZE', '31457280');
define('LOG_LEVEL', 'EMERG,ALERT,CRIT,ERR,NOTICE,DEBUG,LOG,INFO');
define('LOG_PATH', '/data/log/mirai/');
define('LOG_RECORD', '');
define('LOG_TYPE', '3');
define('MEMORY_LIMIT_ON', false);
define('MTP_PATH', '/data/web/MyThink/');
define('PAGE_TRACE_SAVE', '');
define('PHP_SELF', 'index.php');
define('PUBLIC_PATH', '/data/web/MyThink/test/test_app/Public/');
define('PUBLIC_URL', '/Public');
define('ROOT_PATH', '/data/web/MyThink/test/');
define('ROOT_URL', '/');
define('RUNTIME_PATH', '/data/web/MyThink/test/runtime/');
define('SHOW_PAGE_TRACE', 'TRACE_DEBUG');
define('SHOW_TRACE', true);
define('STATIC_PATH', '/data/web/MyThink/test/test_app/Static/');
define('STATIC_URL', '/Static');
define('TEMP_PATH', '/data/web/MyThink/test/runtime/Temp/');
define('THINK_PATH', '/data/web/MyThink/Core/');
define('THINK_VERSION', '3.1.3g');
define('TMPL_ACTION_ERROR', '/data/web/MyThink/Core/Tpl/dispatch_jump.tpl');
define('TMPL_ACTION_SUCCESS', '/data/web/MyThink/Core/Tpl/dispatch_jump.tpl');
define('TMPL_CONTENT_TYPE', 'text/html');
define('TMPL_EXCEPTION_FILE', '/data/web/MyThink/Core/Tpl/think_exception.tpl');
define('TMPL_FILE_DEPR', '_');
define('TMPL_PATH', '/data/web/MyThink/test/test_app/Tpl/');
define('TMPL_TEMPLATE_SUFFIX', '.html');
define('URL_404_REDIRECT', '');
define('URL_DENY_SUFFIX', '');
define('URL_HTML_SUFFIX', 'html');
define('URL_MODEL', 'URL_REWRITE');
define('URL_PATHINFO_DEPR', '/');
define('VAR_ACTION', 'a');
define('VAR_AJAX_SUBMIT', 'ajax');
define('VAR_GROUP', 'g');
define('VAR_JSONP_HANDLER', 'callback');
define('VAR_MODULE', 'm');
define('VAR_URL_PARAMS', '_URL_');
define('VENDOR_PATH', '/data/web/MyThink/Vendor/');
