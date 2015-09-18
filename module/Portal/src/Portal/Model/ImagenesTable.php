<?php

/**
 * @global  Clicks & Bricks
 * @group   Sede - Trujillo
 * @author  J. Miller Gómez Sánchez <miller.gomez@clicksandbricks.pe> <pe.linkedin.com/in/millergomez>
 * @fecha   17/09/2015
 * @tiempo  09:36:47 AM
 */

namespace Portal\Model;

//use Application\Model\Entity;

use Zend\Db\TableGateway\TableGateway;
use Zend\Db\Adapter\Adapter;

//use Zend\Db\Sql\Select;
//use Zend\Db\ResultSet\ResultSet;
//use Zend\Db\Sql\Where;

class ImagenesTable extends TableGateway
{
    public function __construct(Adapter $adapter = null, $databaseSchema = null, ResultSet $selectResultPrototype = null) {
        return parent::__construct('imagenes', $adapter, $databaseSchema,$selectResultPrototype);
    }
    
    public function getImagenPorAmbiente($idAmbiente)
    {
        $idAmbiente = (int) $idAmbiente;
        $rowSet = $this->select(array('idAmbiente' => $idAmbiente));
        $row = $rowSet->current();
        if (!$row)
        {
            throw new \Exception("No existe algun ambiente con el codigo: $idAmbiente");
        }
        return $row;
    }
//    public function getImagenPorAmbiente2($idAmbiente = null){
//        $select = new Select(array('i' => 'imagenes'));
//        $select->columns(array(
//            'idImagen',
//            'ImgArchivo',
//            'ImgTitulo',
//            'ImgDescripcion'
//        ))
//        ->where(function (Where $where) use ($now)
//            {
//                $where->equalTo('i.idAmbiente', $idAmbiente)
//                        ->unnest;
//            });
//        
//        return $this->executeSql($select);
//    }
}