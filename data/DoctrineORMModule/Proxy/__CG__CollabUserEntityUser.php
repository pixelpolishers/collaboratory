<?php

namespace DoctrineORMModule\Proxy\__CG__\CollabUser\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class User extends \CollabUser\Entity\User implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setId($id)
    {
        $this->__load();
        return parent::setId($id);
    }

    public function getIdentity()
    {
        $this->__load();
        return parent::getIdentity();
    }

    public function setIdentity($identity)
    {
        $this->__load();
        return parent::setIdentity($identity);
    }

    public function getCredential()
    {
        $this->__load();
        return parent::getCredential();
    }

    public function setCredential($credential)
    {
        $this->__load();
        return parent::setCredential($credential);
    }

    public function getDisplayName()
    {
        $this->__load();
        return parent::getDisplayName();
    }

    public function setDisplayName($displayName)
    {
        $this->__load();
        return parent::setDisplayName($displayName);
    }

    public function getSnippets()
    {
        $this->__load();
        return parent::getSnippets();
    }

    public function setSnippets($snippets)
    {
        $this->__load();
        return parent::setSnippets($snippets);
    }

    public function addTeam(\CollabTeam\Entity\Team $team)
    {
        $this->__load();
        return parent::addTeam($team);
    }

    public function clearTeams()
    {
        $this->__load();
        return parent::clearTeams();
    }

    public function getTeams()
    {
        $this->__load();
        return parent::getTeams();
    }

    public function removeTeam(\CollabTeam\Entity\Team $team)
    {
        $this->__load();
        return parent::removeTeam($team);
    }

    public function setTeams($teams)
    {
        $this->__load();
        return parent::setTeams($teams);
    }

    public function getSshKeys()
    {
        $this->__load();
        return parent::getSshKeys();
    }

    public function setSshKeys($sshKeys)
    {
        $this->__load();
        return parent::setSshKeys($sshKeys);
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'identity', 'credential', 'displayName', 'id', 'teams');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}