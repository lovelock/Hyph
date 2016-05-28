
extern zend_class_entry *hyph_log_ce;

ZEPHIR_INIT_CLASS(Hyph_Log);

PHP_METHOD(Hyph_Log, __construct);
PHP_METHOD(Hyph_Log, log);
PHP_METHOD(Hyph_Log, emergency);
PHP_METHOD(Hyph_Log, alert);
PHP_METHOD(Hyph_Log, critical);
PHP_METHOD(Hyph_Log, error);
PHP_METHOD(Hyph_Log, warning);
PHP_METHOD(Hyph_Log, notice);
PHP_METHOD(Hyph_Log, info);
PHP_METHOD(Hyph_Log, debug);
PHP_METHOD(Hyph_Log, setPath);
PHP_METHOD(Hyph_Log, getPath);
PHP_METHOD(Hyph_Log, process);
PHP_METHOD(Hyph_Log, checkPath);
PHP_METHOD(Hyph_Log, interpolate);

ZEND_BEGIN_ARG_INFO_EX(arginfo_hyph_log___construct, 0, 0, 1)
	ZEND_ARG_INFO(0, path)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_hyph_log_log, 0, 0, 2)
	ZEND_ARG_INFO(0, level)
	ZEND_ARG_INFO(0, message)
	ZEND_ARG_ARRAY_INFO(0, context, 1)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_hyph_log_emergency, 0, 0, 1)
	ZEND_ARG_INFO(0, message)
	ZEND_ARG_ARRAY_INFO(0, context, 1)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_hyph_log_alert, 0, 0, 1)
	ZEND_ARG_INFO(0, message)
	ZEND_ARG_ARRAY_INFO(0, context, 1)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_hyph_log_critical, 0, 0, 1)
	ZEND_ARG_INFO(0, message)
	ZEND_ARG_ARRAY_INFO(0, context, 1)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_hyph_log_error, 0, 0, 1)
	ZEND_ARG_INFO(0, message)
	ZEND_ARG_ARRAY_INFO(0, context, 1)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_hyph_log_warning, 0, 0, 1)
	ZEND_ARG_INFO(0, message)
	ZEND_ARG_ARRAY_INFO(0, context, 1)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_hyph_log_notice, 0, 0, 1)
	ZEND_ARG_INFO(0, message)
	ZEND_ARG_ARRAY_INFO(0, context, 1)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_hyph_log_info, 0, 0, 1)
	ZEND_ARG_INFO(0, message)
	ZEND_ARG_ARRAY_INFO(0, context, 1)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_hyph_log_debug, 0, 0, 1)
	ZEND_ARG_INFO(0, message)
	ZEND_ARG_ARRAY_INFO(0, context, 1)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_hyph_log_setpath, 0, 0, 1)
	ZEND_ARG_INFO(0, path)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_hyph_log_process, 0, 0, 2)
	ZEND_ARG_INFO(0, level)
	ZEND_ARG_INFO(0, message)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_hyph_log_interpolate, 0, 0, 1)
	ZEND_ARG_INFO(0, message)
	ZEND_ARG_ARRAY_INFO(0, context, 1)
ZEND_END_ARG_INFO()

ZEPHIR_INIT_FUNCS(hyph_log_method_entry) {
	PHP_ME(Hyph_Log, __construct, arginfo_hyph_log___construct, ZEND_ACC_PUBLIC|ZEND_ACC_CTOR)
	PHP_ME(Hyph_Log, log, arginfo_hyph_log_log, ZEND_ACC_PUBLIC)
	PHP_ME(Hyph_Log, emergency, arginfo_hyph_log_emergency, ZEND_ACC_PUBLIC)
	PHP_ME(Hyph_Log, alert, arginfo_hyph_log_alert, ZEND_ACC_PUBLIC)
	PHP_ME(Hyph_Log, critical, arginfo_hyph_log_critical, ZEND_ACC_PUBLIC)
	PHP_ME(Hyph_Log, error, arginfo_hyph_log_error, ZEND_ACC_PUBLIC)
	PHP_ME(Hyph_Log, warning, arginfo_hyph_log_warning, ZEND_ACC_PUBLIC)
	PHP_ME(Hyph_Log, notice, arginfo_hyph_log_notice, ZEND_ACC_PUBLIC)
	PHP_ME(Hyph_Log, info, arginfo_hyph_log_info, ZEND_ACC_PUBLIC)
	PHP_ME(Hyph_Log, debug, arginfo_hyph_log_debug, ZEND_ACC_PUBLIC)
	PHP_ME(Hyph_Log, setPath, arginfo_hyph_log_setpath, ZEND_ACC_PUBLIC)
	PHP_ME(Hyph_Log, getPath, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Hyph_Log, process, arginfo_hyph_log_process, ZEND_ACC_PRIVATE)
	PHP_ME(Hyph_Log, checkPath, NULL, ZEND_ACC_PRIVATE)
	PHP_ME(Hyph_Log, interpolate, arginfo_hyph_log_interpolate, ZEND_ACC_PRIVATE)
	PHP_FE_END
};
