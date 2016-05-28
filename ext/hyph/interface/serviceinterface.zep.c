
#ifdef HAVE_CONFIG_H
#include "../../ext_config.h"
#endif

#include <php.h>
#include "../../php_ext.h"
#include "../../ext.h"

#include <Zend/zend_exceptions.h>

#include "kernel/main.h"


ZEPHIR_INIT_CLASS(Hyph_Interface_ServiceInterface) {

	ZEPHIR_REGISTER_INTERFACE(Hyph\\Interface, ServiceInterface, hyph, interface_serviceinterface, NULL);

	return SUCCESS;

}

