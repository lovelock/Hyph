
extern zend_class_entry *hyph_container_ce;

ZEPHIR_INIT_CLASS(Hyph_Container);

PHP_METHOD(Hyph_Container, __construct);
PHP_METHOD(Hyph_Container, __get);
PHP_METHOD(Hyph_Container, has);
PHP_METHOD(Hyph_Container, get);
PHP_METHOD(Hyph_Container, createService);
PHP_METHOD(Hyph_Container, resolveArguments);

ZEND_BEGIN_ARG_INFO_EX(arginfo_hyph_container___construct, 0, 0, 0)
	ZEND_ARG_ARRAY_INFO(0, services, 1)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_hyph_container___get, 0, 0, 1)
	ZEND_ARG_INFO(0, name)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_hyph_container_has, 0, 0, 1)
	ZEND_ARG_INFO(0, name)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_hyph_container_get, 0, 0, 1)
	ZEND_ARG_INFO(0, name)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_hyph_container_createservice, 0, 0, 1)
	ZEND_ARG_INFO(0, name)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_hyph_container_resolvearguments, 0, 0, 0)
	ZEND_ARG_ARRAY_INFO(0, argumentDefinitions, 1)
ZEND_END_ARG_INFO()

ZEPHIR_INIT_FUNCS(hyph_container_method_entry) {
	PHP_ME(Hyph_Container, __construct, arginfo_hyph_container___construct, ZEND_ACC_PUBLIC|ZEND_ACC_CTOR)
	PHP_ME(Hyph_Container, __get, arginfo_hyph_container___get, ZEND_ACC_PUBLIC)
	PHP_ME(Hyph_Container, has, arginfo_hyph_container_has, ZEND_ACC_PUBLIC)
	PHP_ME(Hyph_Container, get, arginfo_hyph_container_get, ZEND_ACC_PUBLIC)
	PHP_ME(Hyph_Container, createService, arginfo_hyph_container_createservice, ZEND_ACC_PUBLIC)
	PHP_ME(Hyph_Container, resolveArguments, arginfo_hyph_container_resolvearguments, ZEND_ACC_PUBLIC)
	PHP_FE_END
};
