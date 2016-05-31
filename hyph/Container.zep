namespace Hyph;

use Hyph\Exception\ContainerException;
use Hyph\Exception\ServiceNotFoundException;
use Hyph\Interface\ServiceInterface;
use ReflectionClass;

class Container
{
    private services;

    private serviceStore;

    public function __construct(array services = [])
    {
        let this->services = services;
        let this->serviceStore = [];
    }

    public function __get(name) -> <ServiceInterface>
    {
        return this->get(name);
    }

    public function has(string name) -> bool
    {
        return isset(this->services[name]);
    }

    public function get(string name) -> <ServiceInterface>
    {
        if (!this->has(name)) {
            throw new ServiceNotFoundException("Service not found: " . name);
        }

        if (!isset(this->serviceStore[name])) {
            let this->serviceStore[name] = this->createService(name);
        }

        return this->serviceStore[name];
    }

    public function createService(string name) -> <ServiceInterface>
    {
        var entry, arguments, reflector, service;
        let entry = this->services[name];
        if(!is_array(entry) || !isset(entry["class"])) {
            throw new ContainerException(name . " service must be an array containing a key 'class'.");
        } elseif (!class_exists(entry["class"])) {
            throw new ContainerException(name . " service does not exist: " . entry["class"]);
        /*
         *} elseif (isset(entry["lock"])) {
         *    throw new ContainerException(name . " contains circular reference.");
         */
        }

        /*let entry["lock"] = true;*/

        let arguments = isset(entry["arguments"]) ? this->resolveArguments(entry["arguments"]) : [];

        let reflector = new ReflectionClass(entry["class"]);
        let service = reflector->newInstanceArgs(arguments);

        /*
         *if (isset(service["calls"])) {
         *    this->initializeService(service, name, entry["calls"]);
         *}
         */

        return service;
    }

    public function resolveArguments(array argumentDefinitions = []) -> array
    {
        var arguments = [], argumentDefinition; //, argumentServiceName;

        for argumentDefinition in argumentDefinitions {
            /*
             *if (argumentDefinition instanceof ServiceInterface) {
             *    let argumentServiceName = argumentDefinition->getName();
             *    let arguments[] = this->get(argumentServiceName);
             *} else {
             */
            let arguments[] = argumentDefinition;
            /*}*/
        }

        return arguments;
    }

/*
 *    public function initializeService(ServiceInterface service, string name, array callDefinitions = [])
 *    {
 *        var callDefinition, arguments;
 *
 *        for callDefinition in callDefinitions {
 *            if (!is_array(callDefinition) || !isset(callDefinition["method"])) {
 *                throw new ContainerException(name . " must be an array containing a 'method' key.");
 *            } elseif (!is_callable(service, callDefinition["method"])) {
 *                throw new ContainerException(name . " asks for a callable method " . callDefinition["method"] . ".");
 *            }
 *
 *            let arguments = isset(callDefinition["arguments"]) ? this->resolveArguments(callDefinition["arguments"]) : [];
 *            call_user_func_array([service, callDefinition["method"]], arguments);
 *        }
 *    }
 */
}
