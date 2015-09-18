<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AmbienteTabla
 * @global  Clicks & Bricks
 * @group   Trujillo
 * @author  J. Miller Gómez Sánchez
 * @category Developer
 * @link    <https://www.linkedin.com/in/millergomez>
 * @email   <miller.gomez@clicksandbricks.pe>
 */
namespace Portal\Model;

//use Application\Model\Entity;

use Zend\Db\TableGateway\TableGateway;
use Zend\Db\Adapter\Adapter;

class AmbienteTable extends TableGateway
{
    public function __construct(Adapter $adapter = null, $databaseSchema = null, ResultSet $selectResultPrototype = null) {
        return parent::__construct('ambiente', $adapter, $databaseSchema,$selectResultPrototype);
    }
    public function getAmbientes()
    {
        $resultSet = $this->select();
        return $resultSet->toArray();
    }
    public function getDetallePorId($idAmbiente)
    {
        $idAmbiente = (int) $idAmbiente;
        $rowSet = $this->select(array('idAmbiente' => $idAmbiente));
        $row = $rowSet->current();
        if (!$row)
        {
            throw new \Exception("No hay registros asociados al valor $idAmbiente");
        }
        return $row;
    }
}
