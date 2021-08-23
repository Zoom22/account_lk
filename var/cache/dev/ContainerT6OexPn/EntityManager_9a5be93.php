<?php

namespace ContainerT6OexPn;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderc5570 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer2af76 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf0526 = [
        
    ];

    public function getConnection()
    {
        $this->initializer2af76 && ($this->initializer2af76->__invoke($valueHolderc5570, $this, 'getConnection', array(), $this->initializer2af76) || 1) && $this->valueHolderc5570 = $valueHolderc5570;

        return $this->valueHolderc5570->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer2af76 && ($this->initializer2af76->__invoke($valueHolderc5570, $this, 'getMetadataFactory', array(), $this->initializer2af76) || 1) && $this->valueHolderc5570 = $valueHolderc5570;

        return $this->valueHolderc5570->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer2af76 && ($this->initializer2af76->__invoke($valueHolderc5570, $this, 'getExpressionBuilder', array(), $this->initializer2af76) || 1) && $this->valueHolderc5570 = $valueHolderc5570;

        return $this->valueHolderc5570->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer2af76 && ($this->initializer2af76->__invoke($valueHolderc5570, $this, 'beginTransaction', array(), $this->initializer2af76) || 1) && $this->valueHolderc5570 = $valueHolderc5570;

        return $this->valueHolderc5570->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer2af76 && ($this->initializer2af76->__invoke($valueHolderc5570, $this, 'getCache', array(), $this->initializer2af76) || 1) && $this->valueHolderc5570 = $valueHolderc5570;

        return $this->valueHolderc5570->getCache();
    }

    public function transactional($func)
    {
        $this->initializer2af76 && ($this->initializer2af76->__invoke($valueHolderc5570, $this, 'transactional', array('func' => $func), $this->initializer2af76) || 1) && $this->valueHolderc5570 = $valueHolderc5570;

        return $this->valueHolderc5570->transactional($func);
    }

    public function commit()
    {
        $this->initializer2af76 && ($this->initializer2af76->__invoke($valueHolderc5570, $this, 'commit', array(), $this->initializer2af76) || 1) && $this->valueHolderc5570 = $valueHolderc5570;

        return $this->valueHolderc5570->commit();
    }

    public function rollback()
    {
        $this->initializer2af76 && ($this->initializer2af76->__invoke($valueHolderc5570, $this, 'rollback', array(), $this->initializer2af76) || 1) && $this->valueHolderc5570 = $valueHolderc5570;

        return $this->valueHolderc5570->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer2af76 && ($this->initializer2af76->__invoke($valueHolderc5570, $this, 'getClassMetadata', array('className' => $className), $this->initializer2af76) || 1) && $this->valueHolderc5570 = $valueHolderc5570;

        return $this->valueHolderc5570->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer2af76 && ($this->initializer2af76->__invoke($valueHolderc5570, $this, 'createQuery', array('dql' => $dql), $this->initializer2af76) || 1) && $this->valueHolderc5570 = $valueHolderc5570;

        return $this->valueHolderc5570->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer2af76 && ($this->initializer2af76->__invoke($valueHolderc5570, $this, 'createNamedQuery', array('name' => $name), $this->initializer2af76) || 1) && $this->valueHolderc5570 = $valueHolderc5570;

        return $this->valueHolderc5570->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer2af76 && ($this->initializer2af76->__invoke($valueHolderc5570, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer2af76) || 1) && $this->valueHolderc5570 = $valueHolderc5570;

        return $this->valueHolderc5570->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer2af76 && ($this->initializer2af76->__invoke($valueHolderc5570, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer2af76) || 1) && $this->valueHolderc5570 = $valueHolderc5570;

        return $this->valueHolderc5570->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer2af76 && ($this->initializer2af76->__invoke($valueHolderc5570, $this, 'createQueryBuilder', array(), $this->initializer2af76) || 1) && $this->valueHolderc5570 = $valueHolderc5570;

        return $this->valueHolderc5570->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer2af76 && ($this->initializer2af76->__invoke($valueHolderc5570, $this, 'flush', array('entity' => $entity), $this->initializer2af76) || 1) && $this->valueHolderc5570 = $valueHolderc5570;

        return $this->valueHolderc5570->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer2af76 && ($this->initializer2af76->__invoke($valueHolderc5570, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2af76) || 1) && $this->valueHolderc5570 = $valueHolderc5570;

        return $this->valueHolderc5570->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer2af76 && ($this->initializer2af76->__invoke($valueHolderc5570, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer2af76) || 1) && $this->valueHolderc5570 = $valueHolderc5570;

        return $this->valueHolderc5570->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer2af76 && ($this->initializer2af76->__invoke($valueHolderc5570, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer2af76) || 1) && $this->valueHolderc5570 = $valueHolderc5570;

        return $this->valueHolderc5570->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer2af76 && ($this->initializer2af76->__invoke($valueHolderc5570, $this, 'clear', array('entityName' => $entityName), $this->initializer2af76) || 1) && $this->valueHolderc5570 = $valueHolderc5570;

        return $this->valueHolderc5570->clear($entityName);
    }

    public function close()
    {
        $this->initializer2af76 && ($this->initializer2af76->__invoke($valueHolderc5570, $this, 'close', array(), $this->initializer2af76) || 1) && $this->valueHolderc5570 = $valueHolderc5570;

        return $this->valueHolderc5570->close();
    }

    public function persist($entity)
    {
        $this->initializer2af76 && ($this->initializer2af76->__invoke($valueHolderc5570, $this, 'persist', array('entity' => $entity), $this->initializer2af76) || 1) && $this->valueHolderc5570 = $valueHolderc5570;

        return $this->valueHolderc5570->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer2af76 && ($this->initializer2af76->__invoke($valueHolderc5570, $this, 'remove', array('entity' => $entity), $this->initializer2af76) || 1) && $this->valueHolderc5570 = $valueHolderc5570;

        return $this->valueHolderc5570->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer2af76 && ($this->initializer2af76->__invoke($valueHolderc5570, $this, 'refresh', array('entity' => $entity), $this->initializer2af76) || 1) && $this->valueHolderc5570 = $valueHolderc5570;

        return $this->valueHolderc5570->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer2af76 && ($this->initializer2af76->__invoke($valueHolderc5570, $this, 'detach', array('entity' => $entity), $this->initializer2af76) || 1) && $this->valueHolderc5570 = $valueHolderc5570;

        return $this->valueHolderc5570->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer2af76 && ($this->initializer2af76->__invoke($valueHolderc5570, $this, 'merge', array('entity' => $entity), $this->initializer2af76) || 1) && $this->valueHolderc5570 = $valueHolderc5570;

        return $this->valueHolderc5570->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer2af76 && ($this->initializer2af76->__invoke($valueHolderc5570, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer2af76) || 1) && $this->valueHolderc5570 = $valueHolderc5570;

        return $this->valueHolderc5570->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer2af76 && ($this->initializer2af76->__invoke($valueHolderc5570, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2af76) || 1) && $this->valueHolderc5570 = $valueHolderc5570;

        return $this->valueHolderc5570->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer2af76 && ($this->initializer2af76->__invoke($valueHolderc5570, $this, 'getRepository', array('entityName' => $entityName), $this->initializer2af76) || 1) && $this->valueHolderc5570 = $valueHolderc5570;

        return $this->valueHolderc5570->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer2af76 && ($this->initializer2af76->__invoke($valueHolderc5570, $this, 'contains', array('entity' => $entity), $this->initializer2af76) || 1) && $this->valueHolderc5570 = $valueHolderc5570;

        return $this->valueHolderc5570->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer2af76 && ($this->initializer2af76->__invoke($valueHolderc5570, $this, 'getEventManager', array(), $this->initializer2af76) || 1) && $this->valueHolderc5570 = $valueHolderc5570;

        return $this->valueHolderc5570->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer2af76 && ($this->initializer2af76->__invoke($valueHolderc5570, $this, 'getConfiguration', array(), $this->initializer2af76) || 1) && $this->valueHolderc5570 = $valueHolderc5570;

        return $this->valueHolderc5570->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer2af76 && ($this->initializer2af76->__invoke($valueHolderc5570, $this, 'isOpen', array(), $this->initializer2af76) || 1) && $this->valueHolderc5570 = $valueHolderc5570;

        return $this->valueHolderc5570->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer2af76 && ($this->initializer2af76->__invoke($valueHolderc5570, $this, 'getUnitOfWork', array(), $this->initializer2af76) || 1) && $this->valueHolderc5570 = $valueHolderc5570;

        return $this->valueHolderc5570->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer2af76 && ($this->initializer2af76->__invoke($valueHolderc5570, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2af76) || 1) && $this->valueHolderc5570 = $valueHolderc5570;

        return $this->valueHolderc5570->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer2af76 && ($this->initializer2af76->__invoke($valueHolderc5570, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2af76) || 1) && $this->valueHolderc5570 = $valueHolderc5570;

        return $this->valueHolderc5570->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer2af76 && ($this->initializer2af76->__invoke($valueHolderc5570, $this, 'getProxyFactory', array(), $this->initializer2af76) || 1) && $this->valueHolderc5570 = $valueHolderc5570;

        return $this->valueHolderc5570->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer2af76 && ($this->initializer2af76->__invoke($valueHolderc5570, $this, 'initializeObject', array('obj' => $obj), $this->initializer2af76) || 1) && $this->valueHolderc5570 = $valueHolderc5570;

        return $this->valueHolderc5570->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer2af76 && ($this->initializer2af76->__invoke($valueHolderc5570, $this, 'getFilters', array(), $this->initializer2af76) || 1) && $this->valueHolderc5570 = $valueHolderc5570;

        return $this->valueHolderc5570->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer2af76 && ($this->initializer2af76->__invoke($valueHolderc5570, $this, 'isFiltersStateClean', array(), $this->initializer2af76) || 1) && $this->valueHolderc5570 = $valueHolderc5570;

        return $this->valueHolderc5570->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer2af76 && ($this->initializer2af76->__invoke($valueHolderc5570, $this, 'hasFilters', array(), $this->initializer2af76) || 1) && $this->valueHolderc5570 = $valueHolderc5570;

        return $this->valueHolderc5570->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer2af76 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderc5570) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderc5570 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderc5570->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer2af76 && ($this->initializer2af76->__invoke($valueHolderc5570, $this, '__get', ['name' => $name], $this->initializer2af76) || 1) && $this->valueHolderc5570 = $valueHolderc5570;

        if (isset(self::$publicPropertiesf0526[$name])) {
            return $this->valueHolderc5570->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc5570;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderc5570;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer2af76 && ($this->initializer2af76->__invoke($valueHolderc5570, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer2af76) || 1) && $this->valueHolderc5570 = $valueHolderc5570;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc5570;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderc5570;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer2af76 && ($this->initializer2af76->__invoke($valueHolderc5570, $this, '__isset', array('name' => $name), $this->initializer2af76) || 1) && $this->valueHolderc5570 = $valueHolderc5570;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc5570;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderc5570;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer2af76 && ($this->initializer2af76->__invoke($valueHolderc5570, $this, '__unset', array('name' => $name), $this->initializer2af76) || 1) && $this->valueHolderc5570 = $valueHolderc5570;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc5570;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderc5570;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer2af76 && ($this->initializer2af76->__invoke($valueHolderc5570, $this, '__clone', array(), $this->initializer2af76) || 1) && $this->valueHolderc5570 = $valueHolderc5570;

        $this->valueHolderc5570 = clone $this->valueHolderc5570;
    }

    public function __sleep()
    {
        $this->initializer2af76 && ($this->initializer2af76->__invoke($valueHolderc5570, $this, '__sleep', array(), $this->initializer2af76) || 1) && $this->valueHolderc5570 = $valueHolderc5570;

        return array('valueHolderc5570');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer2af76 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer2af76;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer2af76 && ($this->initializer2af76->__invoke($valueHolderc5570, $this, 'initializeProxy', array(), $this->initializer2af76) || 1) && $this->valueHolderc5570 = $valueHolderc5570;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc5570;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc5570;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
