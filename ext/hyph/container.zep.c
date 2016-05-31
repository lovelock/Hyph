
#ifdef HAVE_CONFIG_H
#include "../ext_config.h"
#endif

#include <php.h>
#include "../php_ext.h"
#include "../ext.h"

#include <Zend/zend_operators.h>
#include <Zend/zend_exceptions.h>
#include <Zend/zend_interfaces.h>

#include "kernel/main.h"
#include "kernel/object.h"
#include "kernel/memory.h"
#include "kernel/operators.h"
#include "kernel/fcall.h"
#include "kernel/array.h"
#include "kernel/exception.h"
#include "kernel/concat.h"
#include "kernel/hash.h"


ZEPHIR_INIT_CLASS(Hyph_Container) {

	ZEPHIR_REGISTER_CLASS(Hyph, Container, hyph, container, hyph_container_method_entry, 0);

	zend_declare_property_null(hyph_container_ce, SL("services"), ZEND_ACC_PRIVATE TSRMLS_CC);

	zend_declare_property_null(hyph_container_ce, SL("serviceStore"), ZEND_ACC_PRIVATE TSRMLS_CC);

	return SUCCESS;

}

PHP_METHOD(Hyph_Container, __construct) {

	zval *services_param = NULL, _0;
	zval services;
	ZEPHIR_INIT_THIS();

	ZVAL_UNDEF(&services);
	ZVAL_UNDEF(&_0);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 0, 1, &services_param);

	if (!services_param) {
		ZEPHIR_INIT_VAR(&services);
		array_init(&services);
	} else {
		zephir_get_arrval(&services, services_param);
	}


	zephir_update_property_zval(this_ptr, SL("services"), &services);
	ZEPHIR_INIT_VAR(&_0);
	array_init(&_0);
	zephir_update_property_zval(this_ptr, SL("serviceStore"), &_0);
	ZEPHIR_MM_RESTORE();

}

PHP_METHOD(Hyph_Container, __get) {

	int ZEPHIR_LAST_CALL_STATUS;
	zval *name, name_sub;
	ZEPHIR_INIT_THIS();

	ZVAL_UNDEF(&name_sub);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 0, &name);



	ZEPHIR_RETURN_CALL_METHOD(this_ptr, "get", NULL, 0, name);
	zephir_check_call_status();
	RETURN_MM();

}

PHP_METHOD(Hyph_Container, has) {

	zval *name_param = NULL, _0;
	zval name;
	ZEPHIR_INIT_THIS();

	ZVAL_UNDEF(&name);
	ZVAL_UNDEF(&_0);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 0, &name_param);

	zephir_get_strval(&name, name_param);


	zephir_read_property(&_0, this_ptr, SL("services"), PH_NOISY_CC | PH_READONLY);
	RETURN_MM_BOOL(zephir_array_isset(&_0, &name));

}

PHP_METHOD(Hyph_Container, get) {

	int ZEPHIR_LAST_CALL_STATUS;
	zval *name_param = NULL, _0, _3, _5, _6, _1$$3, _4$$4;
	zval name, _2$$3;
	ZEPHIR_INIT_THIS();

	ZVAL_UNDEF(&name);
	ZVAL_UNDEF(&_2$$3);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_3);
	ZVAL_UNDEF(&_5);
	ZVAL_UNDEF(&_6);
	ZVAL_UNDEF(&_1$$3);
	ZVAL_UNDEF(&_4$$4);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 0, &name_param);

	zephir_get_strval(&name, name_param);


	ZEPHIR_CALL_METHOD(&_0, this_ptr, "has", NULL, 0, &name);
	zephir_check_call_status();
	if (!zephir_is_true(&_0)) {
		ZEPHIR_INIT_VAR(&_1$$3);
		object_init_ex(&_1$$3, hyph_exception_servicenotfoundexception_ce);
		ZEPHIR_INIT_VAR(&_2$$3);
		ZEPHIR_CONCAT_SV(&_2$$3, "Service not found: ", &name);
		ZEPHIR_CALL_METHOD(NULL, &_1$$3, "__construct", NULL, 1, &_2$$3);
		zephir_check_call_status();
		zephir_throw_exception_debug(&_1$$3, "hyph/Container.zep", 33 TSRMLS_CC);
		ZEPHIR_MM_RESTORE();
		return;
	}
	zephir_read_property(&_3, this_ptr, SL("serviceStore"), PH_NOISY_CC | PH_READONLY);
	if (!(zephir_array_isset(&_3, &name))) {
		ZEPHIR_CALL_METHOD(&_4$$4, this_ptr, "createservice", NULL, 0, &name);
		zephir_check_call_status();
		zephir_update_property_array(this_ptr, SL("serviceStore"), &name, &_4$$4 TSRMLS_CC);
	}
	zephir_read_property(&_5, this_ptr, SL("serviceStore"), PH_NOISY_CC | PH_READONLY);
	zephir_array_fetch(&_6, &_5, &name, PH_NOISY | PH_READONLY, "hyph/Container.zep", 40 TSRMLS_CC);
	RETURN_CTOR(_6);

}

PHP_METHOD(Hyph_Container, createService) {

	zend_bool _1;
	int ZEPHIR_LAST_CALL_STATUS;
	zval *name_param = NULL, entry, arguments, reflector, service, _0, _2, _8, _9, _3$$3, _5$$4, _6$$4, _7$$4;
	zval name, _4$$3;
	ZEPHIR_INIT_THIS();

	ZVAL_UNDEF(&name);
	ZVAL_UNDEF(&_4$$3);
	ZVAL_UNDEF(&entry);
	ZVAL_UNDEF(&arguments);
	ZVAL_UNDEF(&reflector);
	ZVAL_UNDEF(&service);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_2);
	ZVAL_UNDEF(&_8);
	ZVAL_UNDEF(&_9);
	ZVAL_UNDEF(&_3$$3);
	ZVAL_UNDEF(&_5$$4);
	ZVAL_UNDEF(&_6$$4);
	ZVAL_UNDEF(&_7$$4);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 0, &name_param);

	zephir_get_strval(&name, name_param);


	zephir_read_property(&_0, this_ptr, SL("services"), PH_NOISY_CC | PH_READONLY);
	ZEPHIR_OBS_VAR(&entry);
	zephir_array_fetch(&entry, &_0, &name, PH_NOISY, "hyph/Container.zep", 46 TSRMLS_CC);
	_1 = !(Z_TYPE_P(&entry) == IS_ARRAY);
	if (!(_1)) {
		_1 = !(zephir_array_isset_string(&entry, SL("class")));
	}
	zephir_array_fetch_string(&_2, &entry, SL("class"), PH_NOISY | PH_READONLY, "hyph/Container.zep", 49 TSRMLS_CC);
	if (_1) {
		ZEPHIR_INIT_VAR(&_3$$3);
		object_init_ex(&_3$$3, hyph_exception_containerexception_ce);
		ZEPHIR_INIT_VAR(&_4$$3);
		ZEPHIR_CONCAT_VS(&_4$$3, &name, " service must be an array containing a key 'class'.");
		ZEPHIR_CALL_METHOD(NULL, &_3$$3, "__construct", NULL, 1, &_4$$3);
		zephir_check_call_status();
		zephir_throw_exception_debug(&_3$$3, "hyph/Container.zep", 48 TSRMLS_CC);
		ZEPHIR_MM_RESTORE();
		return;
	} else if (!(zephir_class_exists(&_2, 1 TSRMLS_CC))) {
		ZEPHIR_INIT_VAR(&_5$$4);
		object_init_ex(&_5$$4, hyph_exception_containerexception_ce);
		zephir_array_fetch_string(&_6$$4, &entry, SL("class"), PH_NOISY | PH_READONLY, "hyph/Container.zep", 50 TSRMLS_CC);
		ZEPHIR_INIT_VAR(&_7$$4);
		ZEPHIR_CONCAT_VSV(&_7$$4, &name, " service does not exist: ", &_6$$4);
		ZEPHIR_CALL_METHOD(NULL, &_5$$4, "__construct", NULL, 1, &_7$$4);
		zephir_check_call_status();
		zephir_throw_exception_debug(&_5$$4, "hyph/Container.zep", 50 TSRMLS_CC);
		ZEPHIR_MM_RESTORE();
		return;
	}
	if (zephir_array_isset_string(&entry, SL("arguments"))) {
		zephir_array_fetch_string(&_8, &entry, SL("arguments"), PH_NOISY | PH_READONLY, "hyph/Container.zep", 59 TSRMLS_CC);
		ZEPHIR_CALL_METHOD(&arguments, this_ptr, "resolvearguments", NULL, 0, &_8);
		zephir_check_call_status();
	} else {
		ZEPHIR_INIT_NVAR(&arguments);
		array_init(&arguments);
	}
	ZEPHIR_INIT_VAR(&reflector);
	object_init_ex(&reflector, zephir_get_internal_ce(SL("reflectionclass")));
	zephir_array_fetch_string(&_9, &entry, SL("class"), PH_NOISY | PH_READONLY, "hyph/Container.zep", 61 TSRMLS_CC);
	ZEPHIR_CALL_METHOD(NULL, &reflector, "__construct", NULL, 2, &_9);
	zephir_check_call_status();
	ZEPHIR_CALL_METHOD(&service, &reflector, "newinstanceargs", NULL, 3, &arguments);
	zephir_check_call_status();
	RETURN_CCTOR(service);

}

PHP_METHOD(Hyph_Container, resolveArguments) {

	zval *argumentDefinitions_param = NULL, arguments, argumentDefinition, *_0;
	zval argumentDefinitions;
	ZEPHIR_INIT_THIS();

	ZVAL_UNDEF(&argumentDefinitions);
	ZVAL_UNDEF(&arguments);
	ZVAL_UNDEF(&argumentDefinition);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 0, 1, &argumentDefinitions_param);

	if (!argumentDefinitions_param) {
		ZEPHIR_INIT_VAR(&argumentDefinitions);
		array_init(&argumentDefinitions);
	} else {
		zephir_get_arrval(&argumentDefinitions, argumentDefinitions_param);
	}


	ZEPHIR_INIT_VAR(&arguments);
	array_init(&arguments);
	zephir_is_iterable(&argumentDefinitions, 0, "hyph/Container.zep", 88);
	ZEND_HASH_FOREACH_VAL(Z_ARRVAL_P(&argumentDefinitions), _0)
	{
		ZEPHIR_INIT_NVAR(&argumentDefinition);
		ZVAL_COPY(&argumentDefinition, _0);
		zephir_array_append(&arguments, &argumentDefinition, PH_SEPARATE, "hyph/Container.zep", 84);
	} ZEND_HASH_FOREACH_END();
	ZEPHIR_INIT_NVAR(&argumentDefinition);
	RETURN_CCTOR(arguments);

}

