
/* This file was generated automatically by Zephir do not modify it! */

#ifndef PHP_HYPH_H
#define PHP_HYPH_H 1

#ifdef PHP_WIN32
#define ZEPHIR_RELEASE 1
#endif

#include "kernel/globals.h"

#define PHP_HYPH_NAME        "hyph"
#define PHP_HYPH_VERSION     "0.0.1"
#define PHP_HYPH_EXTNAME     "hyph"
#define PHP_HYPH_AUTHOR      ""
#define PHP_HYPH_ZEPVERSION  "0.9.3a-dev-9b78871b2e"
#define PHP_HYPH_DESCRIPTION ""



ZEND_BEGIN_MODULE_GLOBALS(hyph)

	int initialized;

	/* Memory */
	zephir_memory_entry *start_memory; /**< The first preallocated frame */
	zephir_memory_entry *end_memory; /**< The last preallocate frame */
	zephir_memory_entry *active_memory; /**< The current memory frame */

	/* Virtual Symbol Tables */
	zephir_symbol_table *active_symbol_table;

	/** Function cache */
	HashTable *fcache;

	zephir_fcall_cache_entry *scache[ZEPHIR_MAX_CACHE_SLOTS];

	/* Cache enabled */
	unsigned int cache_enabled;

	/* Max recursion control */
	unsigned int recursive_lock;

	
ZEND_END_MODULE_GLOBALS(hyph)

#ifdef ZTS
#include "TSRM.h"
#endif

ZEND_EXTERN_MODULE_GLOBALS(hyph)

#ifdef ZTS
	#define ZEPHIR_GLOBAL(v) ZEND_MODULE_GLOBALS_ACCESSOR(hyph, v)
#else
	#define ZEPHIR_GLOBAL(v) (hyph_globals.v)
#endif

#ifdef ZTS
	void ***tsrm_ls;
	#define ZEPHIR_VGLOBAL ((zend_hyph_globals *) (*((void ***) tsrm_get_ls_cache()))[TSRM_UNSHUFFLE_RSRC_ID(hyph_globals_id)])
#else
	#define ZEPHIR_VGLOBAL &(hyph_globals)
#endif

#define ZEPHIR_API ZEND_API

#define zephir_globals_def hyph_globals
#define zend_zephir_globals_def zend_hyph_globals

extern zend_module_entry hyph_module_entry;
#define phpext_hyph_ptr &hyph_module_entry

#endif
