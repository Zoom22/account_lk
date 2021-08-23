<?php

namespace ContainerTkxxDeB;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldercfd75 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializere9162 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties8a901 = [
        
    ];

    public function getConnection()
    {
        $this->initializere9162 && ($this->initializere9162->__invoke($valueHoldercfd75, $this, 'getConnection', array(), $this->initializere9162) || 1) && $this->valueHoldercfd75 = $valueHoldercfd75;

        return $this->valueHoldercfd75->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializere9162 && ($this->initializere9162->__invoke($valueHoldercfd75, $this, 'getMetadataFactory', array(), $this->initializere9162) || 1) && $this->valueHoldercfd75 = $valueHoldercfd75;

        return $this->valueHoldercfd75->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializere9162 && ($this->initializere9162->__invoke($valueHoldercfd75, $this, 'getExpressionBuilder', array(), $this->initializere9162) || 1) && $this->valueHoldercfd75 = $valueHoldercfd75;

        return $this->valueHoldercfd75->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializere9162 && ($this->initializere9162->__invoke($valueHoldercfd75, $this, 'beginTransaction', array(), $this->initializere9162) || 1) && $this->valueHoldercfd75 = $valueHoldercfd75;

        return $this->valueHoldercfd75->beginTransaction();
    }

    public function getCache()
    {
        $this->initializere9162 && ($this->initializere9162->__invoke($valueHoldercfd75, $this, 'getCache', array(), $this->initializere9162) || 1) && $this->valueHoldercfd75 = $valueHoldercfd75;

        return $this->valueHoldercfd75->getCache();
    }

    public function transactional($func)
    {
        $this->initializere9162 && ($this->initializere9162->__invoke($valueHoldercfd75, $this, 'transactional', array('func' => $func), $this->initializere9162) || 1) && $this->valueHoldercfd75 = $valueHoldercfd75;

        return $this->valueHoldercfd75->transactional($func);
    }

    public function commit()
    {
        $this->initializere9162 && ($this->initializere9162->__invoke($valueHoldercfd75, $this, 'commit', array(), $this->initializere9162) || 1) && $this->valueHoldercfd75 = $valueHoldercfd75;

        return $this->valueHoldercfd75->commit();
    }

    public function rollback()
    {
        $this->initializere9162 && ($this->initializere9162->__invoke($valueHoldercfd75, $this, 'rollback', array(), $this->initializere9162) || 1) && $this->valueHoldercfd75 = $valueHoldercfd75;

        return $this->valueHoldercfd75->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializere9162 && ($this->initializere9162->__invoke($valueHoldercfd75, $this, 'getClassMetadata', array('className' => $className), $this->initializere9162) || 1) && $this->valueHoldercfd75 = $valueHoldercfd75;

        return $this->valueHoldercfd75->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializere9162 && ($this->initializere9162->__invoke($valueHoldercfd75, $this, 'createQuery', array('dql' => $dql), $this->initializere9162) || 1) && $this->valueHoldercfd75 = $valueHoldercfd75;

        return $this->valueHoldercfd75->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializere9162 && ($this->initializere9162->__invoke($valueHoldercfd75, $this, 'createNamedQuery', array('name' => $name), $this->initializere9162) || 1) && $this->valueHoldercfd75 = $valueHoldercfd75;

        return $this->valueHoldercfd75->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializere9162 && ($this->initializere9162->__invoke($valueHoldercfd75, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializere9162) || 1) && $this->valueHoldercfd75 = $valueHoldercfd75;

        return $this->valueHoldercfd75->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializere9162 && ($this->initializere9162->__invoke($valueHoldercfd75, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializere9162) || 1) && $this->valueHoldercfd75 = $valueHoldercfd75;

        return $this->valueHoldercfd75->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializere9162 && ($this->initializere9162->__invoke($valueHoldercfd75, $this, 'createQueryBuilder', array(), $this->initializere9162) || 1) && $this->valueHoldercfd75 = $valueHoldercfd75;

        return $this->valueHoldercfd75->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializere9162 && ($this->initializere9162->__invoke($valueHoldercfd75, $this, 'flush', array('entity' => $entity), $this->initializere9162) || 1) && $this->valueHoldercfd75 = $valueHoldercfd75;

        return $this->valueHoldercfd75->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializere9162 && ($this->initializere9162->__invoke($valueHoldercfd75, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere9162) || 1) && $this->valueHoldercfd75 = $valueHoldercfd75;

        return $this->valueHoldercfd75->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializere9162 && ($this->initializere9162->__invoke($valueHoldercfd75, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializere9162) || 1) && $this->valueHoldercfd75 = $valueHoldercfd75;

        return $this->valueHoldercfd75->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializere9162 && ($this->initializere9162->__invoke($valueHoldercfd75, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializere9162) || 1) && $this->valueHoldercfd75 = $valueHoldercfd75;

        return $this->valueHoldercfd75->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializere9162 && ($this->initializere9162->__invoke($valueHoldercfd75, $this, 'clear', array('entityName' => $entityName), $this->initializere9162) || 1) && $this->valueHoldercfd75 = $valueHoldercfd75;

        return $this->valueHoldercfd75->clear($entityName);
    }

    public function close()
    {
        $this->initializere9162 && ($this->initializere9162->__invoke($valueHoldercfd75, $this, 'close', array(), $this->initializere9162) || 1) && $this->valueHoldercfd75 = $valueHoldercfd75;

        return $this->valueHoldercfd75->close();
    }

    public function persist($entity)
    {
        $this->initializere9162 && ($this->initializere9162->__invoke($valueHoldercfd75, $this, 'persist', array('entity' => $entity), $this->initializere9162) || 1) && $this->valueHoldercfd75 = $valueHoldercfd75;

        return $this->valueHoldercfd75->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializere9162 && ($this->initializere9162->__invoke($valueHoldercfd75, $this, 'remove', array('entity' => $entity), $this->initializere9162) || 1) && $this->valueHoldercfd75 = $valueHoldercfd75;

        return $this->valueHoldercfd75->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializere9162 && ($this->initializere9162->__invoke($valueHoldercfd75, $this, 'refresh', array('entity' => $entity), $this->initializere9162) || 1) && $this->valueHoldercfd75 = $valueHoldercfd75;

        return $this->valueHoldercfd75->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializere9162 && ($this->initializere9162->__invoke($valueHoldercfd75, $this, 'detach', array('entity' => $entity), $this->initializere9162) || 1) && $this->valueHoldercfd75 = $valueHoldercfd75;

        return $this->valueHoldercfd75->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializere9162 && ($this->initializere9162->__invoke($valueHoldercfd75, $this, 'merge', array('entity' => $entity), $this->initializere9162) || 1) && $this->valueHoldercfd75 = $valueHoldercfd75;

        return $this->valueHoldercfd75->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializere9162 && ($this->initializere9162->__invoke($valueHoldercfd75, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializere9162) || 1) && $this->valueHoldercfd75 = $valueHoldercfd75;

        return $this->valueHoldercfd75->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializere9162 && ($this->initializere9162->__invoke($valueHoldercfd75, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere9162) || 1) && $this->valueHoldercfd75 = $valueHoldercfd75;

        return $this->valueHoldercfd75->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializere9162 && ($this->initializere9162->__invoke($valueHoldercfd75, $this, 'getRepository', array('entityName' => $entityName), $this->initializere9162) || 1) && $this->valueHoldercfd75 = $valueHoldercfd75;

        return $this->valueHoldercfd75->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializere9162 && ($this->initializere9162->__invoke($valueHoldercfd75, $this, 'contains', array('entity' => $entity), $this->initializere9162) || 1) && $this->valueHoldercfd75 = $valueHoldercfd75;

        return $this->valueHoldercfd75->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializere9162 && ($this->initializere9162->__invoke($valueHoldercfd75, $this, 'getEventManager', array(), $this->initializere9162) || 1) && $this->valueHoldercfd75 = $valueHoldercfd75;

        return $this->valueHoldercfd75->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializere9162 && ($this->initializere9162->__invoke($valueHoldercfd75, $this, 'getConfiguration', array(), $this->initializere9162) || 1) && $this->valueHoldercfd75 = $valueHoldercfd75;

        return $this->valueHoldercfd75->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializere9162 && ($this->initializere9162->__invoke($valueHoldercfd75, $this, 'isOpen', array(), $this->initializere9162) || 1) && $this->valueHoldercfd75 = $valueHoldercfd75;

        return $this->valueHoldercfd75->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializere9162 && ($this->initializere9162->__invoke($valueHoldercfd75, $this, 'getUnitOfWork', array(), $this->initializere9162) || 1) && $this->valueHoldercfd75 = $valueHoldercfd75;

        return $this->valueHoldercfd75->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializere9162 && ($this->initializere9162->__invoke($valueHoldercfd75, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializere9162) || 1) && $this->valueHoldercfd75 = $valueHoldercfd75;

        return $this->valueHoldercfd75->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializere9162 && ($this->initializere9162->__invoke($valueHoldercfd75, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializere9162) || 1) && $this->valueHoldercfd75 = $valueHoldercfd75;

        return $this->valueHoldercfd75->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializere9162 && ($this->initializere9162->__invoke($valueHoldercfd75, $this, 'getProxyFactory', array(), $this->initializere9162) || 1) && $this->valueHoldercfd75 = $valueHoldercfd75;

        return $this->valueHoldercfd75->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializere9162 && ($this->initializere9162->__invoke($valueHoldercfd75, $this, 'initializeObject', array('obj' => $obj), $this->initializere9162) || 1) && $this->valueHoldercfd75 = $valueHoldercfd75;

        return $this->valueHoldercfd75->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializere9162 && ($this->initializere9162->__invoke($valueHoldercfd75, $this, 'getFilters', array(), $this->initializere9162) || 1) && $this->valueHoldercfd75 = $valueHoldercfd75;

        return $this->valueHoldercfd75->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializere9162 && ($this->initializere9162->__invoke($valueHoldercfd75, $this, 'isFiltersStateClean', array(), $this->initializere9162) || 1) && $this->valueHoldercfd75 = $valueHoldercfd75;

        return $this->valueHoldercfd75->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializere9162 && ($this->initializere9162->__invoke($valueHoldercfd75, $this, 'hasFilters', array(), $this->initializere9162) || 1) && $this->valueHoldercfd75 = $valueHoldercfd75;

        return $this->valueHoldercfd75->hasFilters();
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

        $instance->initializere9162 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldercfd75) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldercfd75 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldercfd75->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializere9162 && ($this->initializere9162->__invoke($valueHoldercfd75, $this, '__get', ['name' => $name], $this->initializere9162) || 1) && $this->valueHoldercfd75 = $valueHoldercfd75;

        if (isset(self::$publicProperties8a901[$name])) {
            return $this->valueHoldercfd75->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercfd75;

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

        $targetObject = $this->valueHoldercfd75;
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
        $this->initializere9162 && ($this->initializere9162->__invoke($valueHoldercfd75, $this, '__set', array('name' => $name, 'value' => $value), $this->initializere9162) || 1) && $this->valueHoldercfd75 = $valueHoldercfd75;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercfd75;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldercfd75;
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
        $this->initializere9162 && ($this->initializere9162->__invoke($valueHoldercfd75, $this, '__isset', array('name' => $name), $this->initializere9162) || 1) && $this->valueHoldercfd75 = $valueHoldercfd75;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercfd75;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldercfd75;
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
        $this->initializere9162 && ($this->initializere9162->__invoke($valueHoldercfd75, $this, '__unset', array('name' => $name), $this->initializere9162) || 1) && $this->valueHoldercfd75 = $valueHoldercfd75;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercfd75;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldercfd75;
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
        $this->initializere9162 && ($this->initializere9162->__invoke($valueHoldercfd75, $this, '__clone', array(), $this->initializere9162) || 1) && $this->valueHoldercfd75 = $valueHoldercfd75;

        $this->valueHoldercfd75 = clone $this->valueHoldercfd75;
    }

    public function __sleep()
    {
        $this->initializere9162 && ($this->initializere9162->__invoke($valueHoldercfd75, $this, '__sleep', array(), $this->initializere9162) || 1) && $this->valueHoldercfd75 = $valueHoldercfd75;

        return array('valueHoldercfd75');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializere9162 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializere9162;
    }

    public function initializeProxy() : bool
    {
        return $this->initializere9162 && ($this->initializere9162->__invoke($valueHoldercfd75, $this, 'initializeProxy', array(), $this->initializere9162) || 1) && $this->valueHoldercfd75 = $valueHoldercfd75;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldercfd75;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldercfd75;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
