<?php

namespace ContainerSugUWXu;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder8a5e8 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerdee88 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties64948 = [
        
    ];

    public function getConnection()
    {
        $this->initializerdee88 && ($this->initializerdee88->__invoke($valueHolder8a5e8, $this, 'getConnection', array(), $this->initializerdee88) || 1) && $this->valueHolder8a5e8 = $valueHolder8a5e8;

        return $this->valueHolder8a5e8->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerdee88 && ($this->initializerdee88->__invoke($valueHolder8a5e8, $this, 'getMetadataFactory', array(), $this->initializerdee88) || 1) && $this->valueHolder8a5e8 = $valueHolder8a5e8;

        return $this->valueHolder8a5e8->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerdee88 && ($this->initializerdee88->__invoke($valueHolder8a5e8, $this, 'getExpressionBuilder', array(), $this->initializerdee88) || 1) && $this->valueHolder8a5e8 = $valueHolder8a5e8;

        return $this->valueHolder8a5e8->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerdee88 && ($this->initializerdee88->__invoke($valueHolder8a5e8, $this, 'beginTransaction', array(), $this->initializerdee88) || 1) && $this->valueHolder8a5e8 = $valueHolder8a5e8;

        return $this->valueHolder8a5e8->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerdee88 && ($this->initializerdee88->__invoke($valueHolder8a5e8, $this, 'getCache', array(), $this->initializerdee88) || 1) && $this->valueHolder8a5e8 = $valueHolder8a5e8;

        return $this->valueHolder8a5e8->getCache();
    }

    public function transactional($func)
    {
        $this->initializerdee88 && ($this->initializerdee88->__invoke($valueHolder8a5e8, $this, 'transactional', array('func' => $func), $this->initializerdee88) || 1) && $this->valueHolder8a5e8 = $valueHolder8a5e8;

        return $this->valueHolder8a5e8->transactional($func);
    }

    public function commit()
    {
        $this->initializerdee88 && ($this->initializerdee88->__invoke($valueHolder8a5e8, $this, 'commit', array(), $this->initializerdee88) || 1) && $this->valueHolder8a5e8 = $valueHolder8a5e8;

        return $this->valueHolder8a5e8->commit();
    }

    public function rollback()
    {
        $this->initializerdee88 && ($this->initializerdee88->__invoke($valueHolder8a5e8, $this, 'rollback', array(), $this->initializerdee88) || 1) && $this->valueHolder8a5e8 = $valueHolder8a5e8;

        return $this->valueHolder8a5e8->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerdee88 && ($this->initializerdee88->__invoke($valueHolder8a5e8, $this, 'getClassMetadata', array('className' => $className), $this->initializerdee88) || 1) && $this->valueHolder8a5e8 = $valueHolder8a5e8;

        return $this->valueHolder8a5e8->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerdee88 && ($this->initializerdee88->__invoke($valueHolder8a5e8, $this, 'createQuery', array('dql' => $dql), $this->initializerdee88) || 1) && $this->valueHolder8a5e8 = $valueHolder8a5e8;

        return $this->valueHolder8a5e8->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerdee88 && ($this->initializerdee88->__invoke($valueHolder8a5e8, $this, 'createNamedQuery', array('name' => $name), $this->initializerdee88) || 1) && $this->valueHolder8a5e8 = $valueHolder8a5e8;

        return $this->valueHolder8a5e8->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerdee88 && ($this->initializerdee88->__invoke($valueHolder8a5e8, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerdee88) || 1) && $this->valueHolder8a5e8 = $valueHolder8a5e8;

        return $this->valueHolder8a5e8->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerdee88 && ($this->initializerdee88->__invoke($valueHolder8a5e8, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerdee88) || 1) && $this->valueHolder8a5e8 = $valueHolder8a5e8;

        return $this->valueHolder8a5e8->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerdee88 && ($this->initializerdee88->__invoke($valueHolder8a5e8, $this, 'createQueryBuilder', array(), $this->initializerdee88) || 1) && $this->valueHolder8a5e8 = $valueHolder8a5e8;

        return $this->valueHolder8a5e8->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerdee88 && ($this->initializerdee88->__invoke($valueHolder8a5e8, $this, 'flush', array('entity' => $entity), $this->initializerdee88) || 1) && $this->valueHolder8a5e8 = $valueHolder8a5e8;

        return $this->valueHolder8a5e8->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerdee88 && ($this->initializerdee88->__invoke($valueHolder8a5e8, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerdee88) || 1) && $this->valueHolder8a5e8 = $valueHolder8a5e8;

        return $this->valueHolder8a5e8->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerdee88 && ($this->initializerdee88->__invoke($valueHolder8a5e8, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerdee88) || 1) && $this->valueHolder8a5e8 = $valueHolder8a5e8;

        return $this->valueHolder8a5e8->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerdee88 && ($this->initializerdee88->__invoke($valueHolder8a5e8, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerdee88) || 1) && $this->valueHolder8a5e8 = $valueHolder8a5e8;

        return $this->valueHolder8a5e8->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerdee88 && ($this->initializerdee88->__invoke($valueHolder8a5e8, $this, 'clear', array('entityName' => $entityName), $this->initializerdee88) || 1) && $this->valueHolder8a5e8 = $valueHolder8a5e8;

        return $this->valueHolder8a5e8->clear($entityName);
    }

    public function close()
    {
        $this->initializerdee88 && ($this->initializerdee88->__invoke($valueHolder8a5e8, $this, 'close', array(), $this->initializerdee88) || 1) && $this->valueHolder8a5e8 = $valueHolder8a5e8;

        return $this->valueHolder8a5e8->close();
    }

    public function persist($entity)
    {
        $this->initializerdee88 && ($this->initializerdee88->__invoke($valueHolder8a5e8, $this, 'persist', array('entity' => $entity), $this->initializerdee88) || 1) && $this->valueHolder8a5e8 = $valueHolder8a5e8;

        return $this->valueHolder8a5e8->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerdee88 && ($this->initializerdee88->__invoke($valueHolder8a5e8, $this, 'remove', array('entity' => $entity), $this->initializerdee88) || 1) && $this->valueHolder8a5e8 = $valueHolder8a5e8;

        return $this->valueHolder8a5e8->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerdee88 && ($this->initializerdee88->__invoke($valueHolder8a5e8, $this, 'refresh', array('entity' => $entity), $this->initializerdee88) || 1) && $this->valueHolder8a5e8 = $valueHolder8a5e8;

        return $this->valueHolder8a5e8->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerdee88 && ($this->initializerdee88->__invoke($valueHolder8a5e8, $this, 'detach', array('entity' => $entity), $this->initializerdee88) || 1) && $this->valueHolder8a5e8 = $valueHolder8a5e8;

        return $this->valueHolder8a5e8->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerdee88 && ($this->initializerdee88->__invoke($valueHolder8a5e8, $this, 'merge', array('entity' => $entity), $this->initializerdee88) || 1) && $this->valueHolder8a5e8 = $valueHolder8a5e8;

        return $this->valueHolder8a5e8->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerdee88 && ($this->initializerdee88->__invoke($valueHolder8a5e8, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerdee88) || 1) && $this->valueHolder8a5e8 = $valueHolder8a5e8;

        return $this->valueHolder8a5e8->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerdee88 && ($this->initializerdee88->__invoke($valueHolder8a5e8, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerdee88) || 1) && $this->valueHolder8a5e8 = $valueHolder8a5e8;

        return $this->valueHolder8a5e8->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerdee88 && ($this->initializerdee88->__invoke($valueHolder8a5e8, $this, 'getRepository', array('entityName' => $entityName), $this->initializerdee88) || 1) && $this->valueHolder8a5e8 = $valueHolder8a5e8;

        return $this->valueHolder8a5e8->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerdee88 && ($this->initializerdee88->__invoke($valueHolder8a5e8, $this, 'contains', array('entity' => $entity), $this->initializerdee88) || 1) && $this->valueHolder8a5e8 = $valueHolder8a5e8;

        return $this->valueHolder8a5e8->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerdee88 && ($this->initializerdee88->__invoke($valueHolder8a5e8, $this, 'getEventManager', array(), $this->initializerdee88) || 1) && $this->valueHolder8a5e8 = $valueHolder8a5e8;

        return $this->valueHolder8a5e8->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerdee88 && ($this->initializerdee88->__invoke($valueHolder8a5e8, $this, 'getConfiguration', array(), $this->initializerdee88) || 1) && $this->valueHolder8a5e8 = $valueHolder8a5e8;

        return $this->valueHolder8a5e8->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerdee88 && ($this->initializerdee88->__invoke($valueHolder8a5e8, $this, 'isOpen', array(), $this->initializerdee88) || 1) && $this->valueHolder8a5e8 = $valueHolder8a5e8;

        return $this->valueHolder8a5e8->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerdee88 && ($this->initializerdee88->__invoke($valueHolder8a5e8, $this, 'getUnitOfWork', array(), $this->initializerdee88) || 1) && $this->valueHolder8a5e8 = $valueHolder8a5e8;

        return $this->valueHolder8a5e8->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerdee88 && ($this->initializerdee88->__invoke($valueHolder8a5e8, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerdee88) || 1) && $this->valueHolder8a5e8 = $valueHolder8a5e8;

        return $this->valueHolder8a5e8->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerdee88 && ($this->initializerdee88->__invoke($valueHolder8a5e8, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerdee88) || 1) && $this->valueHolder8a5e8 = $valueHolder8a5e8;

        return $this->valueHolder8a5e8->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerdee88 && ($this->initializerdee88->__invoke($valueHolder8a5e8, $this, 'getProxyFactory', array(), $this->initializerdee88) || 1) && $this->valueHolder8a5e8 = $valueHolder8a5e8;

        return $this->valueHolder8a5e8->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerdee88 && ($this->initializerdee88->__invoke($valueHolder8a5e8, $this, 'initializeObject', array('obj' => $obj), $this->initializerdee88) || 1) && $this->valueHolder8a5e8 = $valueHolder8a5e8;

        return $this->valueHolder8a5e8->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerdee88 && ($this->initializerdee88->__invoke($valueHolder8a5e8, $this, 'getFilters', array(), $this->initializerdee88) || 1) && $this->valueHolder8a5e8 = $valueHolder8a5e8;

        return $this->valueHolder8a5e8->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerdee88 && ($this->initializerdee88->__invoke($valueHolder8a5e8, $this, 'isFiltersStateClean', array(), $this->initializerdee88) || 1) && $this->valueHolder8a5e8 = $valueHolder8a5e8;

        return $this->valueHolder8a5e8->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerdee88 && ($this->initializerdee88->__invoke($valueHolder8a5e8, $this, 'hasFilters', array(), $this->initializerdee88) || 1) && $this->valueHolder8a5e8 = $valueHolder8a5e8;

        return $this->valueHolder8a5e8->hasFilters();
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

        $instance->initializerdee88 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder8a5e8) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder8a5e8 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder8a5e8->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerdee88 && ($this->initializerdee88->__invoke($valueHolder8a5e8, $this, '__get', ['name' => $name], $this->initializerdee88) || 1) && $this->valueHolder8a5e8 = $valueHolder8a5e8;

        if (isset(self::$publicProperties64948[$name])) {
            return $this->valueHolder8a5e8->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8a5e8;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    get_parent_class($this),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
            return;
        }

        $targetObject = $this->valueHolder8a5e8;
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
        $this->initializerdee88 && ($this->initializerdee88->__invoke($valueHolder8a5e8, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerdee88) || 1) && $this->valueHolder8a5e8 = $valueHolder8a5e8;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8a5e8;

            $targetObject->$name = $value; return $targetObject->$name;
            return;
        }

        $targetObject = $this->valueHolder8a5e8;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value; return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializerdee88 && ($this->initializerdee88->__invoke($valueHolder8a5e8, $this, '__isset', array('name' => $name), $this->initializerdee88) || 1) && $this->valueHolder8a5e8 = $valueHolder8a5e8;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8a5e8;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder8a5e8;
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
        $this->initializerdee88 && ($this->initializerdee88->__invoke($valueHolder8a5e8, $this, '__unset', array('name' => $name), $this->initializerdee88) || 1) && $this->valueHolder8a5e8 = $valueHolder8a5e8;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8a5e8;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder8a5e8;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializerdee88 && ($this->initializerdee88->__invoke($valueHolder8a5e8, $this, '__clone', array(), $this->initializerdee88) || 1) && $this->valueHolder8a5e8 = $valueHolder8a5e8;

        $this->valueHolder8a5e8 = clone $this->valueHolder8a5e8;
    }

    public function __sleep()
    {
        $this->initializerdee88 && ($this->initializerdee88->__invoke($valueHolder8a5e8, $this, '__sleep', array(), $this->initializerdee88) || 1) && $this->valueHolder8a5e8 = $valueHolder8a5e8;

        return array('valueHolder8a5e8');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerdee88 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerdee88;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerdee88 && ($this->initializerdee88->__invoke($valueHolder8a5e8, $this, 'initializeProxy', array(), $this->initializerdee88) || 1) && $this->valueHolder8a5e8 = $valueHolder8a5e8;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder8a5e8;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder8a5e8;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
