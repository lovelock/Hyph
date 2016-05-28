
extern zend_class_entry *hyph_hylog_hylog_ce;

ZEPHIR_INIT_CLASS(Hyph_Hylog_Hylog);

PHP_METHOD(Hyph_Hylog_Hylog, __construct);
PHP_METHOD(Hyph_Hylog_Hylog, log);
PHP_METHOD(Hyph_Hylog_Hylog, emergency);
PHP_METHOD(Hyph_Hylog_Hylog, alert);
PHP_METHOD(Hyph_Hylog_Hylog, critical);
PHP_METHOD(Hyph_Hylog_Hylog, error);
PHP_METHOD(Hyph_Hylog_Hylog, warning);
PHP_METHOD(Hyph_Hylog_Hylog, notice);
PHP_METHOD(Hyph_Hylog_Hylog, info);
PHP_METHOD(Hyph_Hylog_Hylog, debug);
PHP_METHOD(Hyph_Hylog_Hylog, setPath);
PHP_METHOD(Hyph_Hylog_Hylog, getPath);
PHP_METHOD(Hyph_Hylog_Hylog, process);
PHP_METHOD(Hyph_Hylog_Hylog, checkPath);
PHP_METHOD(Hyph_Hylog_Hylog, interpolate);
PHP_METHOD(Hyph_Hylog_Hylog, getVersion);

ZEND_BEGIN_ARG_INFO_EX(arginfo_hyph_hylog_hylog___construct, 0, 0, 1)
	ZEND_ARG_INFO(0, path)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_hyph_hylog_hylog_log, 0, 0, 3)
	ZEND_ARG_INFO(0, level)
	ZEND_ARG_INFO(0, message)
	ZEND_ARG_ARRAY_INFO(0, context, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_hyph_hylog_hylog_emergency, 0, 0, 2)
	ZEND_ARG_INFO(0, message)
	ZEND_ARG_ARRAY_INFO(0, context, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_hyph_hylog_hylog_alert, 0, 0, 2)
	ZEND_ARG_INFO(0, message)
	ZEND_ARG_ARRAY_INFO(0, context, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_hyph_hylog_hylog_critical, 0, 0, 2)
	ZEND_ARG_INFO(0, message)
	ZEND_ARG_ARRAY_INFO(0, context, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_hyph_hylog_hylog_error, 0, 0, 2)
	ZEND_ARG_INFO(0, message)
	ZEND_ARG_ARRAY_INFO(0, context, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_hyph_hylog_hylog_warning, 0, 0, 2)
	ZEND_ARG_INFO(0, message)
	ZEND_ARG_ARRAY_INFO(0, context, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_hyph_hylog_hylog_notice, 0, 0, 2)
	ZEND_ARG_INFO(0, message)
	ZEND_ARG_ARRAY_INFO(0, context, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_hyph_hylog_hylog_info, 0, 0, 2)
	ZEND_ARG_INFO(0, message)
	ZEND_ARG_ARRAY_INFO(0, context, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_hyph_hylog_hylog_debug, 0, 0, 2)
	ZEND_ARG_INFO(0, message)
	ZEND_ARG_ARRAY_INFO(0, context, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_hyph_hylog_hylog_setpath, 0, 0, 1)
	ZEND_ARG_INFO(0, path)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_hyph_hylog_hylog_process, 0, 0, 2)
	ZEND_ARG_INFO(0, level)
	ZEND_ARG_INFO(0, message)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_hyph_hylog_hylog_interpolate, 0, 0, 1)
	ZEND_ARG_INFO(0, message)
	ZEND_ARG_ARRAY_INFO(0, context, 1)
ZEND_END_ARG_INFO()

ZEPHIR_INIT_FUNCS(hyph_hylog_hylog_method_entry) {
	PHP_ME(Hyph_Hylog_Hylog, __construct, arginfo_hyph_hylog_hylog___construct, ZEND_ACC_PUBLIC|ZEND_ACC_CTOR)
	PHP_ME(Hyph_Hylog_Hylog, log, arginfo_hyph_hylog_hylog_log, ZEND_ACC_PUBLIC)
	PHP_ME(Hyph_Hylog_Hylog, emergency, arginfo_hyph_hylog_hylog_emergency, ZEND_ACC_PUBLIC)
	PHP_ME(Hyph_Hylog_Hylog, alert, arginfo_hyph_hylog_hylog_alert, ZEND_ACC_PUBLIC)
	PHP_ME(Hyph_Hylog_Hylog, critical, arginfo_hyph_hylog_hylog_critical, ZEND_ACC_PUBLIC)
	PHP_ME(Hyph_Hylog_Hylog, error, arginfo_hyph_hylog_hylog_error, ZEND_ACC_PUBLIC)
	PHP_ME(Hyph_Hylog_Hylog, warning, arginfo_hyph_hylog_hylog_warning, ZEND_ACC_PUBLIC)
	PHP_ME(Hyph_Hylog_Hylog, notice, arginfo_hyph_hylog_hylog_notice, ZEND_ACC_PUBLIC)
	PHP_ME(Hyph_Hylog_Hylog, info, arginfo_hyph_hylog_hylog_info, ZEND_ACC_PUBLIC)
	PHP_ME(Hyph_Hylog_Hylog, debug, arginfo_hyph_hylog_hylog_debug, ZEND_ACC_PUBLIC)
	PHP_ME(Hyph_Hylog_Hylog, setPath, arginfo_hyph_hylog_hylog_setpath, ZEND_ACC_PUBLIC)
	PHP_ME(Hyph_Hylog_Hylog, getPath, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Hyph_Hylog_Hylog, process, arginfo_hyph_hylog_hylog_process, ZEND_ACC_PRIVATE)
	PHP_ME(Hyph_Hylog_Hylog, checkPath, NULL, ZEND_ACC_PRIVATE)
	PHP_ME(Hyph_Hylog_Hylog, interpolate, arginfo_hyph_hylog_hylog_interpolate, ZEND_ACC_PRIVATE)
	PHP_ME(Hyph_Hylog_Hylog, getVersion, NULL, ZEND_ACC_PUBLIC)
	PHP_FE_END
};
