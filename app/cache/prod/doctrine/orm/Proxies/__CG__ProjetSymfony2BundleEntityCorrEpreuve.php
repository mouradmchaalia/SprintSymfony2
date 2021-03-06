<?php

namespace Proxies\__CG__\Projet\Symfony2Bundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class CorrEpreuve extends \Projet\Symfony2Bundle\Entity\CorrEpreuve implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = array();



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
            return array('__isInitialized__', '' . "\0" . 'Projet\\Symfony2Bundle\\Entity\\CorrEpreuve' . "\0" . 'idCorrEpreuve', '' . "\0" . 'Projet\\Symfony2Bundle\\Entity\\CorrEpreuve' . "\0" . 'score', '' . "\0" . 'Projet\\Symfony2Bundle\\Entity\\CorrEpreuve' . "\0" . 'idCandidat', '' . "\0" . 'Projet\\Symfony2Bundle\\Entity\\CorrEpreuve' . "\0" . 'idEpreuve', '' . "\0" . 'Projet\\Symfony2Bundle\\Entity\\CorrEpreuve' . "\0" . 'arret', '' . "\0" . 'Projet\\Symfony2Bundle\\Entity\\CorrEpreuve' . "\0" . 'croisement', '' . "\0" . 'Projet\\Symfony2Bundle\\Entity\\CorrEpreuve' . "\0" . 'infraction', '' . "\0" . 'Projet\\Symfony2Bundle\\Entity\\CorrEpreuve' . "\0" . 'mecanique', '' . "\0" . 'Projet\\Symfony2Bundle\\Entity\\CorrEpreuve' . "\0" . 'priorite', '' . "\0" . 'Projet\\Symfony2Bundle\\Entity\\CorrEpreuve' . "\0" . 'reglementation', '' . "\0" . 'Projet\\Symfony2Bundle\\Entity\\CorrEpreuve' . "\0" . 'secourisme', '' . "\0" . 'Projet\\Symfony2Bundle\\Entity\\CorrEpreuve' . "\0" . 'signalisation', '' . "\0" . 'Projet\\Symfony2Bundle\\Entity\\CorrEpreuve' . "\0" . 'tmd', '' . "\0" . 'Projet\\Symfony2Bundle\\Entity\\CorrEpreuve' . "\0" . 'vitesse');
        }

        return array('__isInitialized__', '' . "\0" . 'Projet\\Symfony2Bundle\\Entity\\CorrEpreuve' . "\0" . 'idCorrEpreuve', '' . "\0" . 'Projet\\Symfony2Bundle\\Entity\\CorrEpreuve' . "\0" . 'score', '' . "\0" . 'Projet\\Symfony2Bundle\\Entity\\CorrEpreuve' . "\0" . 'idCandidat', '' . "\0" . 'Projet\\Symfony2Bundle\\Entity\\CorrEpreuve' . "\0" . 'idEpreuve', '' . "\0" . 'Projet\\Symfony2Bundle\\Entity\\CorrEpreuve' . "\0" . 'arret', '' . "\0" . 'Projet\\Symfony2Bundle\\Entity\\CorrEpreuve' . "\0" . 'croisement', '' . "\0" . 'Projet\\Symfony2Bundle\\Entity\\CorrEpreuve' . "\0" . 'infraction', '' . "\0" . 'Projet\\Symfony2Bundle\\Entity\\CorrEpreuve' . "\0" . 'mecanique', '' . "\0" . 'Projet\\Symfony2Bundle\\Entity\\CorrEpreuve' . "\0" . 'priorite', '' . "\0" . 'Projet\\Symfony2Bundle\\Entity\\CorrEpreuve' . "\0" . 'reglementation', '' . "\0" . 'Projet\\Symfony2Bundle\\Entity\\CorrEpreuve' . "\0" . 'secourisme', '' . "\0" . 'Projet\\Symfony2Bundle\\Entity\\CorrEpreuve' . "\0" . 'signalisation', '' . "\0" . 'Projet\\Symfony2Bundle\\Entity\\CorrEpreuve' . "\0" . 'tmd', '' . "\0" . 'Projet\\Symfony2Bundle\\Entity\\CorrEpreuve' . "\0" . 'vitesse');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (CorrEpreuve $proxy) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
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
    public function getIdCorrEpreuve()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdCorrEpreuve();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdCorrEpreuve', array());

        return parent::getIdCorrEpreuve();
    }

    /**
     * {@inheritDoc}
     */
    public function setScore($score)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setScore', array($score));

        return parent::setScore($score);
    }

    /**
     * {@inheritDoc}
     */
    public function getScore()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getScore', array());

        return parent::getScore();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdCandidat($idCandidat)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdCandidat', array($idCandidat));

        return parent::setIdCandidat($idCandidat);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdCandidat()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdCandidat', array());

        return parent::getIdCandidat();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdEpreuve($idEpreuve)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdEpreuve', array($idEpreuve));

        return parent::setIdEpreuve($idEpreuve);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdEpreuve()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdEpreuve', array());

        return parent::getIdEpreuve();
    }

    /**
     * {@inheritDoc}
     */
    public function setArret($arret)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setArret', array($arret));

        return parent::setArret($arret);
    }

    /**
     * {@inheritDoc}
     */
    public function getArret()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getArret', array());

        return parent::getArret();
    }

    /**
     * {@inheritDoc}
     */
    public function setCroisement($croisement)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCroisement', array($croisement));

        return parent::setCroisement($croisement);
    }

    /**
     * {@inheritDoc}
     */
    public function getCroisement()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCroisement', array());

        return parent::getCroisement();
    }

    /**
     * {@inheritDoc}
     */
    public function setInfraction($infraction)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInfraction', array($infraction));

        return parent::setInfraction($infraction);
    }

    /**
     * {@inheritDoc}
     */
    public function getInfraction()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInfraction', array());

        return parent::getInfraction();
    }

    /**
     * {@inheritDoc}
     */
    public function setMecanique($mecanique)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMecanique', array($mecanique));

        return parent::setMecanique($mecanique);
    }

    /**
     * {@inheritDoc}
     */
    public function getMecanique()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMecanique', array());

        return parent::getMecanique();
    }

    /**
     * {@inheritDoc}
     */
    public function setPriorite($priorite)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPriorite', array($priorite));

        return parent::setPriorite($priorite);
    }

    /**
     * {@inheritDoc}
     */
    public function getPriorite()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPriorite', array());

        return parent::getPriorite();
    }

    /**
     * {@inheritDoc}
     */
    public function setReglementation($reglementation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReglementation', array($reglementation));

        return parent::setReglementation($reglementation);
    }

    /**
     * {@inheritDoc}
     */
    public function getReglementation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReglementation', array());

        return parent::getReglementation();
    }

    /**
     * {@inheritDoc}
     */
    public function setSecourisme($secourisme)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSecourisme', array($secourisme));

        return parent::setSecourisme($secourisme);
    }

    /**
     * {@inheritDoc}
     */
    public function getSecourisme()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSecourisme', array());

        return parent::getSecourisme();
    }

    /**
     * {@inheritDoc}
     */
    public function setSignalisation($signalisation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSignalisation', array($signalisation));

        return parent::setSignalisation($signalisation);
    }

    /**
     * {@inheritDoc}
     */
    public function getSignalisation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSignalisation', array());

        return parent::getSignalisation();
    }

    /**
     * {@inheritDoc}
     */
    public function setTmd($tmd)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTmd', array($tmd));

        return parent::setTmd($tmd);
    }

    /**
     * {@inheritDoc}
     */
    public function getTmd()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTmd', array());

        return parent::getTmd();
    }

    /**
     * {@inheritDoc}
     */
    public function setVitesse($vitesse)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVitesse', array($vitesse));

        return parent::setVitesse($vitesse);
    }

    /**
     * {@inheritDoc}
     */
    public function getVitesse()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVitesse', array());

        return parent::getVitesse();
    }

}
