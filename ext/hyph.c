
/* This file was generated automatically by Zephir do not modify it! */

#ifdef HAVE_CONFIG_H
#include "config.h"
#endif

#include <php.h>

#include "php_ext.h"
#include "hyph.h"

#include <ext/standard/info.h>

#include <Zend/zend_operators.h>
#include <Zend/zend_exceptions.h>
#include <Zend/zend_interfaces.h>

#include "kernel/globals.h"
#include "kernel/main.h"
#include "kernel/fcall.h"
#include "kernel/memory.h"



zend_class_entry *hyph_interface_serviceinterface_ce;
zend_class_entry *hyph_exception_containerexception_ce;
zend_class_entry *hyph_container_ce;
zend_class_entry *hyph_exception_permissiondeniedexception_ce;
zend_class_entry *hyph_exception_servicenotfoundexception_ce;
zend_class_entry *hyph_log_ce;

ZEND_DECLARE_MODULE_GLOBALS(hyph)

PHP_INI_BEGIN()
	
PHP_INI_END()

static PHP_MINIT_FUNCTION(hyph)
{
	REGISTER_INI_ENTRIES();
	ZEPHIR_INIT(Hyph_Interface_ServiceInterface);
	ZEPHIR_INIT(Hyph_Exception_ContainerException);
	ZEPHIR_INIT(Hyph_Container);
	ZEPHIR_INIT(Hyph_Exception_PermissionDeniedException);
	ZEPHIR_INIT(Hyph_Exception_ServiceNotFoundException);
	ZEPHIR_INIT(Hyph_Log);
	return SUCCESS;
}

#ifndef ZEPHIR_RELEASE
static PHP_MSHUTDOWN_FUNCTION(hyph)
{
	zephir_deinitialize_memory(TSRMLS_C);
	UNREGISTER_INI_ENTRIES();
	return SUCCESS;
}
#endif

/**
 * Initialize globals on each request or each thread started
 */
static void php_zephir_init_globals(zend_hyph_globals *hyph_globals TSRMLS_DC)
{
	hyph_globals->initialized = 0;

	/* Memory options */
	hyph_globals->active_memory = NULL;

	/* Virtual Symbol Tables */
	hyph_globals->active_symbol_table = NULL;

	/* Cache Enabled */
	hyph_globals->cache_enabled = 1;

	/* Recursive Lock */
	hyph_globals->recursive_lock = 0;

	/* Static cache */
	memset(hyph_globals->scache, '\0', sizeof(zephir_fcall_cache_entry*) * ZEPHIR_MAX_CACHE_SLOTS);


}

static PHP_RINIT_FUNCTION(hyph)
{

	zend_hyph_globals *hyph_globals_ptr;
#ifdef ZTS
	tsrm_ls = ts_resource(0);
#endif
	hyph_globals_ptr = ZEPHIR_VGLOBAL;

	php_zephir_init_globals(hyph_globals_ptr TSRMLS_CC);
	zephir_initialize_memory(hyph_globals_ptr TSRMLS_CC);


	return SUCCESS;
}

static PHP_RSHUTDOWN_FUNCTION(hyph)
{
	
	zephir_deinitialize_memory(TSRMLS_C);
	return SUCCESS;
}

static PHP_MINFO_FUNCTION(hyph)
{
	php_info_print_box_start(0);
	php_printf("%s", PHP_HYPH_DESCRIPTION);
	php_info_print_box_end();

	php_info_print_table_start();
	php_info_print_table_header(2, PHP_HYPH_NAME, "enabled");
	php_info_print_table_row(2, "Author", PHP_HYPH_AUTHOR);
	php_info_print_table_row(2, "Version", PHP_HYPH_VERSION);
	php_info_print_table_row(2, "Build Date", __DATE__ " " __TIME__ );
	php_info_print_table_row(2, "Powered by Zephir", "Version " PHP_HYPH_ZEPVERSION);
	php_info_print_table_end();

	DISPLAY_INI_ENTRIES();
}

static PHP_GINIT_FUNCTION(hyph)
{
	php_zephir_init_globals(hyph_globals TSRMLS_CC);
}

static PHP_GSHUTDOWN_FUNCTION(hyph)
{

}


zend_function_entry php_hyph_functions[] = {
ZEND_FE_END

};

zend_module_entry hyph_module_entry = {
	STANDARD_MODULE_HEADER_EX,
	NULL,
	NULL,
	PHP_HYPH_EXTNAME,
	php_hyph_functions,
	PHP_MINIT(hyph),
#ifndef ZEPHIR_RELEASE
	PHP_MSHUTDOWN(hyph),
#else
	NULL,
#endif
	PHP_RINIT(hyph),
	PHP_RSHUTDOWN(hyph),
	PHP_MINFO(hyph),
	PHP_HYPH_VERSION,
	ZEND_MODULE_GLOBALS(hyph),
	PHP_GINIT(hyph),
	PHP_GSHUTDOWN(hyph),
	NULL,
	STANDARD_MODULE_PROPERTIES_EX
};

#ifdef COMPILE_DL_HYPH
ZEND_GET_MODULE(hyph)
#endif
