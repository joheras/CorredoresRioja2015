<?php

namespace Proxies\__CG__\App\CorredoresRiojaDomain\Model;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Corredor extends \App\CorredoresRiojaDomain\Model\Corredor implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\CorredoresRiojaDomain\\Model\\Corredor' . "\0" . 'dni', '' . "\0" . 'App\\CorredoresRiojaDomain\\Model\\Corredor' . "\0" . 'nombre', '' . "\0" . 'App\\CorredoresRiojaDomain\\Model\\Corredor' . "\0" . 'apellidos', '' . "\0" . 'App\\CorredoresRiojaDomain\\Model\\Corredor' . "\0" . 'email', '' . "\0" . 'App\\CorredoresRiojaDomain\\Model\\Corredor' . "\0" . 'password', '' . "\0" . 'App\\CorredoresRiojaDomain\\Model\\Corredor' . "\0" . 'direccion', '' . "\0" . 'App\\CorredoresRiojaDomain\\Model\\Corredor' . "\0" . 'fechanacimiento', '' . "\0" . 'App\\CorredoresRiojaDomain\\Model\\Corredor' . "\0" . 'salt'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\CorredoresRiojaDomain\\Model\\Corredor' . "\0" . 'dni', '' . "\0" . 'App\\CorredoresRiojaDomain\\Model\\Corredor' . "\0" . 'nombre', '' . "\0" . 'App\\CorredoresRiojaDomain\\Model\\Corredor' . "\0" . 'apellidos', '' . "\0" . 'App\\CorredoresRiojaDomain\\Model\\Corredor' . "\0" . 'email', '' . "\0" . 'App\\CorredoresRiojaDomain\\Model\\Corredor' . "\0" . 'password', '' . "\0" . 'App\\CorredoresRiojaDomain\\Model\\Corredor' . "\0" . 'direccion', '' . "\0" . 'App\\CorredoresRiojaDomain\\Model\\Corredor' . "\0" . 'fechanacimiento', '' . "\0" . 'App\\CorredoresRiojaDomain\\Model\\Corredor' . "\0" . 'salt'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Corredor $proxy) {
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
    public function getDni()
    {
        if ($this->__isInitialized__ === false) {
            return  parent::getDni();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDni', []);

        return parent::getDni();
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
    public function getApellidos()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getApellidos', []);

        return parent::getApellidos();
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', []);

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function getDireccion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDireccion', []);

        return parent::getDireccion();
    }

    /**
     * {@inheritDoc}
     */
    public function getFechanacimiento()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechanacimiento', []);

        return parent::getFechanacimiento();
    }

    /**
     * {@inheritDoc}
     */
    public function getSalt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSalt', []);

        return parent::getSalt();
    }

    /**
     * {@inheritDoc}
     */
    public function saveEncodedPassword($encoded)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'saveEncodedPassword', [$encoded]);

        return parent::saveEncodedPassword($encoded);
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
    public function isPasswordLegal()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isPasswordLegal', []);

        return parent::isPasswordLegal();
    }

    /**
     * {@inheritDoc}
     */
    public function isMayorEdad()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isMayorEdad', []);

        return parent::isMayorEdad();
    }

}
