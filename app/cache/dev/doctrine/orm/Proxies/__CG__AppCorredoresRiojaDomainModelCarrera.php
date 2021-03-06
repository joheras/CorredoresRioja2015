<?php

namespace Proxies\__CG__\App\CorredoresRiojaDomain\Model;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Carrera extends \App\CorredoresRiojaDomain\Model\Carrera implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\CorredoresRiojaDomain\\Model\\Carrera' . "\0" . 'id', '' . "\0" . 'App\\CorredoresRiojaDomain\\Model\\Carrera' . "\0" . 'nombre', '' . "\0" . 'App\\CorredoresRiojaDomain\\Model\\Carrera' . "\0" . 'descripcion', '' . "\0" . 'App\\CorredoresRiojaDomain\\Model\\Carrera' . "\0" . 'fechacelebracion', '' . "\0" . 'App\\CorredoresRiojaDomain\\Model\\Carrera' . "\0" . 'distancia', '' . "\0" . 'App\\CorredoresRiojaDomain\\Model\\Carrera' . "\0" . 'fechalimiteinscripcion', '' . "\0" . 'App\\CorredoresRiojaDomain\\Model\\Carrera' . "\0" . 'numeromaximoparticipantes', '' . "\0" . 'App\\CorredoresRiojaDomain\\Model\\Carrera' . "\0" . 'imagen', '' . "\0" . 'App\\CorredoresRiojaDomain\\Model\\Carrera' . "\0" . 'slug', '' . "\0" . 'App\\CorredoresRiojaDomain\\Model\\Carrera' . "\0" . 'organizador'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\CorredoresRiojaDomain\\Model\\Carrera' . "\0" . 'id', '' . "\0" . 'App\\CorredoresRiojaDomain\\Model\\Carrera' . "\0" . 'nombre', '' . "\0" . 'App\\CorredoresRiojaDomain\\Model\\Carrera' . "\0" . 'descripcion', '' . "\0" . 'App\\CorredoresRiojaDomain\\Model\\Carrera' . "\0" . 'fechacelebracion', '' . "\0" . 'App\\CorredoresRiojaDomain\\Model\\Carrera' . "\0" . 'distancia', '' . "\0" . 'App\\CorredoresRiojaDomain\\Model\\Carrera' . "\0" . 'fechalimiteinscripcion', '' . "\0" . 'App\\CorredoresRiojaDomain\\Model\\Carrera' . "\0" . 'numeromaximoparticipantes', '' . "\0" . 'App\\CorredoresRiojaDomain\\Model\\Carrera' . "\0" . 'imagen', '' . "\0" . 'App\\CorredoresRiojaDomain\\Model\\Carrera' . "\0" . 'slug', '' . "\0" . 'App\\CorredoresRiojaDomain\\Model\\Carrera' . "\0" . 'organizador'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Carrera $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function setId($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', [$id]);

        return parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function setImagen($imagen)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImagen', [$imagen]);

        return parent::setImagen($imagen);
    }

    /**
     * {@inheritDoc}
     */
    public function actualizaCampos($nombre, $descripcion, $fechacelebracion, $distancia, $fechalimiteinscripcion, $numeromaximoparticipantes, $imagen)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'actualizaCampos', [$nombre, $descripcion, $fechacelebracion, $distancia, $fechalimiteinscripcion, $numeromaximoparticipantes, $imagen]);

        return parent::actualizaCampos($nombre, $descripcion, $fechacelebracion, $distancia, $fechalimiteinscripcion, $numeromaximoparticipantes, $imagen);
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getNombre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombre', []);

        return parent::getNombre();
    }

    /**
     * {@inheritDoc}
     */
    public function getDescripcion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescripcion', []);

        return parent::getDescripcion();
    }

    /**
     * {@inheritDoc}
     */
    public function getFechacelebracion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechacelebracion', []);

        return parent::getFechacelebracion();
    }

    /**
     * {@inheritDoc}
     */
    public function getDistancia()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDistancia', []);

        return parent::getDistancia();
    }

    /**
     * {@inheritDoc}
     */
    public function getFechalimiteinscripcion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechalimiteinscripcion', []);

        return parent::getFechalimiteinscripcion();
    }

    /**
     * {@inheritDoc}
     */
    public function getNumeromaximoparticipantes()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumeromaximoparticipantes', []);

        return parent::getNumeromaximoparticipantes();
    }

    /**
     * {@inheritDoc}
     */
    public function getImagen()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImagen', []);

        return parent::getImagen();
    }

    /**
     * {@inheritDoc}
     */
    public function getOrganizador()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrganizador', []);

        return parent::getOrganizador();
    }

    /**
     * {@inheritDoc}
     */
    public function getSlug()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSlug', []);

        return parent::getSlug();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function subirFoto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'subirFoto', []);

        return parent::subirFoto();
    }

}
