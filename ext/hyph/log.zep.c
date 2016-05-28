
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
#include "kernel/fcall.h"
#include "kernel/operators.h"
#include "kernel/memory.h"
#include "kernel/time.h"
#include "kernel/concat.h"
#include "kernel/file.h"
#include "kernel/exception.h"
#include "ext/spl/spl_exceptions.h"
#include "kernel/string.h"
#include "kernel/hash.h"
#include "kernel/array.h"


ZEPHIR_INIT_CLASS(Hyph_Log) {

	ZEPHIR_REGISTER_CLASS(Hyph, Log, hyph, log, hyph_log_method_entry, 0);

	zend_declare_property_null(hyph_log_ce, SL("path"), ZEND_ACC_PRIVATE TSRMLS_CC);

	zephir_declare_class_constant_string(hyph_log_ce, SL("EMERGENCY"), "EMERGENCY");

	zephir_declare_class_constant_string(hyph_log_ce, SL("ALERT"), "ALERT");

	zephir_declare_class_constant_string(hyph_log_ce, SL("CRITICAL"), "CRITICAL");

	zephir_declare_class_constant_string(hyph_log_ce, SL("ERROR"), "ERROR");

	zephir_declare_class_constant_string(hyph_log_ce, SL("WARNING"), "WARNING");

	zephir_declare_class_constant_string(hyph_log_ce, SL("NOTICE"), "NOTICE");

	zephir_declare_class_constant_string(hyph_log_ce, SL("INFO"), "INFO");

	zephir_declare_class_constant_string(hyph_log_ce, SL("DEBUG"), "DEBUG");

	return SUCCESS;

}

PHP_METHOD(Hyph_Log, __construct) {

	int ZEPHIR_LAST_CALL_STATUS;
	zval *path_param = NULL;
	zval path;
	ZEPHIR_INIT_THIS();

	ZVAL_UNDEF(&path);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 0, &path_param);

	zephir_get_strval(&path, path_param);


	zephir_update_property_zval(this_ptr, SL("path"), &path);
	ZEPHIR_CALL_METHOD(NULL, this_ptr, "checkpath", NULL, 1);
	zephir_check_call_status();
	ZEPHIR_MM_RESTORE();

}

PHP_METHOD(Hyph_Log, log) {

	int ZEPHIR_LAST_CALL_STATUS;
	zval context;
	zval *level_param = NULL, *message_param = NULL, *context_param = NULL, line, timestamp, datetime, _0, _1;
	zval level, message;
	ZEPHIR_INIT_THIS();

	ZVAL_UNDEF(&level);
	ZVAL_UNDEF(&message);
	ZVAL_UNDEF(&line);
	ZVAL_UNDEF(&timestamp);
	ZVAL_UNDEF(&datetime);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1);
	ZVAL_UNDEF(&context);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 3, 0, &level_param, &message_param, &context_param);

	zephir_get_strval(&level, level_param);
	zephir_get_strval(&message, message_param);
	zephir_get_arrval(&context, context_param);


	ZEPHIR_CALL_METHOD(&line, this_ptr, "interpolate", NULL, 2, &message, &context);
	zephir_check_call_status();
	ZEPHIR_INIT_VAR(&timestamp);
	zephir_time(&timestamp);
	ZEPHIR_INIT_VAR(&_0);
	ZVAL_STRING(&_0, "Y-m-d\\TH:i:sP");
	ZEPHIR_CALL_FUNCTION(&datetime, "date", NULL, 3, &_0);
	zephir_check_call_status();
	ZEPHIR_INIT_VAR(&_1);
	ZEPHIR_CONCAT_VSVSV(&_1, &timestamp, "\t", &datetime, "\t", &line);
	ZEPHIR_CPY_WRT(&line, &_1);
	ZEPHIR_CALL_METHOD(NULL, this_ptr, "process", NULL, 4, &level, &line);
	zephir_check_call_status();
	ZEPHIR_MM_RESTORE();

}

PHP_METHOD(Hyph_Log, emergency) {

	int ZEPHIR_LAST_CALL_STATUS;
	zval context;
	zval *message_param = NULL, *context_param = NULL, _0;
	zval message;
	ZEPHIR_INIT_THIS();

	ZVAL_UNDEF(&message);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&context);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 2, 0, &message_param, &context_param);

	zephir_get_strval(&message, message_param);
	zephir_get_arrval(&context, context_param);


	ZEPHIR_INIT_VAR(&_0);
	ZVAL_STRING(&_0, "EMERGENCY");
	ZEPHIR_CALL_METHOD(NULL, this_ptr, "log", NULL, 0, &_0, &message, &context);
	zephir_check_call_status();
	ZEPHIR_MM_RESTORE();

}

PHP_METHOD(Hyph_Log, alert) {

	int ZEPHIR_LAST_CALL_STATUS;
	zval context;
	zval *message_param = NULL, *context_param = NULL, _0;
	zval message;
	ZEPHIR_INIT_THIS();

	ZVAL_UNDEF(&message);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&context);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 2, 0, &message_param, &context_param);

	zephir_get_strval(&message, message_param);
	zephir_get_arrval(&context, context_param);


	ZEPHIR_INIT_VAR(&_0);
	ZVAL_STRING(&_0, "ALERT");
	ZEPHIR_CALL_METHOD(NULL, this_ptr, "log", NULL, 0, &_0, &message, &context);
	zephir_check_call_status();
	ZEPHIR_MM_RESTORE();

}

PHP_METHOD(Hyph_Log, critical) {

	int ZEPHIR_LAST_CALL_STATUS;
	zval context;
	zval *message_param = NULL, *context_param = NULL, _0;
	zval message;
	ZEPHIR_INIT_THIS();

	ZVAL_UNDEF(&message);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&context);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 2, 0, &message_param, &context_param);

	zephir_get_strval(&message, message_param);
	zephir_get_arrval(&context, context_param);


	ZEPHIR_INIT_VAR(&_0);
	ZVAL_STRING(&_0, "CRITICAL");
	ZEPHIR_CALL_METHOD(NULL, this_ptr, "log", NULL, 0, &_0, &message, &context);
	zephir_check_call_status();
	ZEPHIR_MM_RESTORE();

}

PHP_METHOD(Hyph_Log, error) {

	int ZEPHIR_LAST_CALL_STATUS;
	zval context;
	zval *message_param = NULL, *context_param = NULL, _0;
	zval message;
	ZEPHIR_INIT_THIS();

	ZVAL_UNDEF(&message);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&context);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 2, 0, &message_param, &context_param);

	zephir_get_strval(&message, message_param);
	zephir_get_arrval(&context, context_param);


	ZEPHIR_INIT_VAR(&_0);
	ZVAL_STRING(&_0, "ERROR");
	ZEPHIR_CALL_METHOD(NULL, this_ptr, "log", NULL, 0, &_0, &message, &context);
	zephir_check_call_status();
	ZEPHIR_MM_RESTORE();

}

PHP_METHOD(Hyph_Log, warning) {

	int ZEPHIR_LAST_CALL_STATUS;
	zval context;
	zval *message_param = NULL, *context_param = NULL, _0;
	zval message;
	ZEPHIR_INIT_THIS();

	ZVAL_UNDEF(&message);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&context);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 2, 0, &message_param, &context_param);

	zephir_get_strval(&message, message_param);
	zephir_get_arrval(&context, context_param);


	ZEPHIR_INIT_VAR(&_0);
	ZVAL_STRING(&_0, "WARNING");
	ZEPHIR_CALL_METHOD(NULL, this_ptr, "log", NULL, 0, &_0, &message, &context);
	zephir_check_call_status();
	ZEPHIR_MM_RESTORE();

}

PHP_METHOD(Hyph_Log, notice) {

	int ZEPHIR_LAST_CALL_STATUS;
	zval context;
	zval *message_param = NULL, *context_param = NULL, _0;
	zval message;
	ZEPHIR_INIT_THIS();

	ZVAL_UNDEF(&message);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&context);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 2, 0, &message_param, &context_param);

	zephir_get_strval(&message, message_param);
	zephir_get_arrval(&context, context_param);


	ZEPHIR_INIT_VAR(&_0);
	ZVAL_STRING(&_0, "NOTICE");
	ZEPHIR_CALL_METHOD(NULL, this_ptr, "log", NULL, 0, &_0, &message, &context);
	zephir_check_call_status();
	ZEPHIR_MM_RESTORE();

}

PHP_METHOD(Hyph_Log, info) {

	int ZEPHIR_LAST_CALL_STATUS;
	zval context;
	zval *message_param = NULL, *context_param = NULL, _0;
	zval message;
	ZEPHIR_INIT_THIS();

	ZVAL_UNDEF(&message);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&context);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 2, 0, &message_param, &context_param);

	zephir_get_strval(&message, message_param);
	zephir_get_arrval(&context, context_param);


	ZEPHIR_INIT_VAR(&_0);
	ZVAL_STRING(&_0, "INFO");
	ZEPHIR_CALL_METHOD(NULL, this_ptr, "log", NULL, 0, &_0, &message, &context);
	zephir_check_call_status();
	ZEPHIR_MM_RESTORE();

}

PHP_METHOD(Hyph_Log, debug) {

	int ZEPHIR_LAST_CALL_STATUS;
	zval context;
	zval *message_param = NULL, *context_param = NULL, _0;
	zval message;
	ZEPHIR_INIT_THIS();

	ZVAL_UNDEF(&message);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&context);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 2, 0, &message_param, &context_param);

	zephir_get_strval(&message, message_param);
	zephir_get_arrval(&context, context_param);


	ZEPHIR_INIT_VAR(&_0);
	ZVAL_STRING(&_0, "DEBUG");
	ZEPHIR_CALL_METHOD(NULL, this_ptr, "log", NULL, 0, &_0, &message, &context);
	zephir_check_call_status();
	ZEPHIR_MM_RESTORE();

}

PHP_METHOD(Hyph_Log, setPath) {

	int ZEPHIR_LAST_CALL_STATUS;
	zval *path_param = NULL;
	zval path;
	ZEPHIR_INIT_THIS();

	ZVAL_UNDEF(&path);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 0, &path_param);

	zephir_get_strval(&path, path_param);


	zephir_update_property_zval(this_ptr, SL("path"), &path);
	ZEPHIR_CALL_METHOD(NULL, this_ptr, "checkpath", NULL, 1);
	zephir_check_call_status();
	ZEPHIR_MM_RESTORE();

}

PHP_METHOD(Hyph_Log, getPath) {

	ZEPHIR_INIT_THIS();


	RETURN_MEMBER(this_ptr, "path");

}

PHP_METHOD(Hyph_Log, process) {

	int ZEPHIR_LAST_CALL_STATUS;
	zval *level_param = NULL, *message_param = NULL, realfile, datetime, _0, _1, _2, _3;
	zval level, message;
	ZEPHIR_INIT_THIS();

	ZVAL_UNDEF(&level);
	ZVAL_UNDEF(&message);
	ZVAL_UNDEF(&realfile);
	ZVAL_UNDEF(&datetime);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1);
	ZVAL_UNDEF(&_2);
	ZVAL_UNDEF(&_3);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 2, 0, &level_param, &message_param);

	zephir_get_strval(&level, level_param);
	zephir_get_strval(&message, message_param);


	ZEPHIR_INIT_VAR(&_0);
	ZVAL_STRING(&_0, "YmdH");
	ZEPHIR_CALL_FUNCTION(&datetime, "date", NULL, 3, &_0);
	zephir_check_call_status();
	zephir_read_property(&_1, this_ptr, SL("path"), PH_NOISY_CC | PH_READONLY);
	ZEPHIR_INIT_VAR(&realfile);
	ZEPHIR_CONCAT_VSVSVS(&realfile, &_1, "/", &level, ".", &datetime, ".log");
	ZEPHIR_INIT_NVAR(&_0);
	ZEPHIR_GET_CONSTANT(&_0, "PHP_EOL");
	ZEPHIR_INIT_VAR(&_2);
	ZEPHIR_CONCAT_VV(&_2, &message, &_0);
	ZVAL_LONG(&_3, 3);
	ZEPHIR_CALL_FUNCTION(NULL, "error_log", NULL, 5, &_2, &_3, &realfile);
	zephir_check_call_status();
	ZEPHIR_MM_RESTORE();

}

PHP_METHOD(Hyph_Log, checkPath) {

	int ZEPHIR_LAST_CALL_STATUS;
	zval __$true, mkdirResult, _0, _8, _9, _10, _1$$3, _2$$3, _3$$4, _4$$4, _5$$4, _6$$5, _7$$5;
	ZEPHIR_INIT_THIS();

	ZVAL_BOOL(&__$true, 1);
	ZVAL_UNDEF(&mkdirResult);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_8);
	ZVAL_UNDEF(&_9);
	ZVAL_UNDEF(&_10);
	ZVAL_UNDEF(&_1$$3);
	ZVAL_UNDEF(&_2$$3);
	ZVAL_UNDEF(&_3$$4);
	ZVAL_UNDEF(&_4$$4);
	ZVAL_UNDEF(&_5$$4);
	ZVAL_UNDEF(&_6$$5);
	ZVAL_UNDEF(&_7$$5);

	ZEPHIR_MM_GROW();

	zephir_read_property(&_0, this_ptr, SL("path"), PH_NOISY_CC | PH_READONLY);
	if (!((zephir_file_exists(&_0 TSRMLS_CC) == SUCCESS))) {
		zephir_read_property(&_1$$3, this_ptr, SL("path"), PH_NOISY_CC | PH_READONLY);
		ZVAL_LONG(&_2$$3, 0700);
		ZEPHIR_CALL_FUNCTION(&mkdirResult, "mkdir", NULL, 6, &_1$$3, &_2$$3, &__$true);
		zephir_check_call_status();
		if (ZEPHIR_IS_FALSE_IDENTICAL(&mkdirResult)) {
			ZEPHIR_INIT_VAR(&_3$$4);
			object_init_ex(&_3$$4, hyph_exception_permissiondeniedexception_ce);
			zephir_read_property(&_4$$4, this_ptr, SL("path"), PH_NOISY_CC | PH_READONLY);
			ZEPHIR_INIT_VAR(&_5$$4);
			ZEPHIR_CONCAT_SVS(&_5$$4, "Can't create directory in ", &_4$$4, ", please check again.");
			ZEPHIR_CALL_METHOD(NULL, &_3$$4, "__construct", NULL, 7, &_5$$4);
			zephir_check_call_status();
			zephir_throw_exception_debug(&_3$$4, "hyph/Log.zep", 105 TSRMLS_CC);
			ZEPHIR_MM_RESTORE();
			return;
		}
	} else {
		zephir_read_property(&_6$$5, this_ptr, SL("path"), PH_NOISY_CC | PH_READONLY);
		ZEPHIR_CALL_FUNCTION(&_7$$5, "is_dir", NULL, 8, &_6$$5);
		zephir_check_call_status();
		if (!zephir_is_true(&_7$$5)) {
			ZEPHIR_THROW_EXCEPTION_DEBUG_STR(spl_ce_InvalidArgumentException, "A valid path must be passed to store log files.", "hyph/Log.zep", 109);
			return;
		}
	}
	ZEPHIR_INIT_VAR(&_8);
	zephir_read_property(&_9, this_ptr, SL("path"), PH_NOISY_CC | PH_READONLY);
	ZEPHIR_INIT_VAR(&_10);
	ZVAL_STRING(&_10, "/");
	zephir_fast_trim(&_8, &_9, &_10, ZEPHIR_TRIM_RIGHT TSRMLS_CC);
	zephir_update_property_zval(this_ptr, SL("path"), &_8);
	ZEPHIR_MM_RESTORE();

}

PHP_METHOD(Hyph_Log, interpolate) {

	zend_string *_2;
	zend_ulong _1;
	int ZEPHIR_LAST_CALL_STATUS;
	zval context, replacement;
	zval *message_param = NULL, *context_param = NULL, key, value, *_0, _3$$3;
	zval message;
	ZEPHIR_INIT_THIS();

	ZVAL_UNDEF(&message);
	ZVAL_UNDEF(&key);
	ZVAL_UNDEF(&value);
	ZVAL_UNDEF(&_3$$3);
	ZVAL_UNDEF(&context);
	ZVAL_UNDEF(&replacement);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 1, &message_param, &context_param);

	zephir_get_strval(&message, message_param);
	if (!context_param) {
		ZEPHIR_INIT_VAR(&context);
		array_init(&context);
	} else {
		zephir_get_arrval(&context, context_param);
	}


	ZEPHIR_INIT_VAR(&replacement);
	array_init(&replacement);
	zephir_is_iterable(&context, 0, "hyph/Log.zep", 125);
	ZEND_HASH_FOREACH_KEY_VAL(Z_ARRVAL_P(&context), _1, _2, _0)
	{
		ZEPHIR_INIT_NVAR(&key);
		if (_2 != NULL) { 
			ZVAL_STR_COPY(&key, _2);
		} else {
			ZVAL_LONG(&key, _1);
		}
		ZEPHIR_INIT_NVAR(&value);
		ZVAL_COPY(&value, _0);
		ZEPHIR_INIT_LNVAR(_3$$3);
		ZEPHIR_CONCAT_SVS(&_3$$3, "{", &key, "}");
		zephir_array_update_zval(&replacement, &_3$$3, &value, PH_COPY | PH_SEPARATE);
	} ZEND_HASH_FOREACH_END();
	ZEPHIR_INIT_NVAR(&value);
	ZEPHIR_INIT_NVAR(&key);
	ZEPHIR_RETURN_CALL_FUNCTION("strtr", NULL, 9, &message, &replacement);
	zephir_check_call_status();
	RETURN_MM();

}

