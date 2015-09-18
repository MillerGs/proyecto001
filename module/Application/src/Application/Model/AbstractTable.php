<?php

/**
 * @global  Clicks & Bricks
 * @group   Sede - Trujillo
 * @author  J. Miller Gómez Sánchez <miller.gomez@clicksandbricks.pe> <pe.linkedin.com/in/millergomez>
 * @fecha   17/09/2015
 * @tiempo  09:39:49 AM
 */
namespace Application\Model;

use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\ServiceManager\ServiceLocatorAwareInterface;
use Zend\Db\TableGateway\TableGateway;

abstract class AbstractTable implements ServiceLocatorAwareInterface
{
    /**
     *
     * @var ServiceLocatorInterface 
     */
    protected $serviceLocator;

    /**
     *
     * @var Zend\Db\TableGateway\TableGateway
     */
    protected $tableGateway;
    
    public function __construct(TableGateway $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }
    
    public function getServiceLocator() {
        return $this->serviceLocator;
    }

    public function setServiceLocator(ServiceLocatorInterface $serviceLocator) {
        $this->serviceLocator = $serviceLocator;
    }
}