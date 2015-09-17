<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * @global  Clicks & Bricks
 * @group   Trujillo
 * @author  J. Miller Gómez Sánchez
 * @category Developer
 * @link    <https://www.linkedin.com/in/millergomez>
 * @email   <miller.gomez@clicksandbricks.pe>
 */

namespace Application\Model\Entity;

class Ambiente
{
    public $idAmbiente;
    public $idPropiedad;
    public $idOperacion;
    public $AmbDormitorio;
    public $AmbBanio;
    public $AmbAreaTotal;
    public $AmbAmoblado;
    public $AmbDireccion;
    public $AmbGoogleMaps;
    public $AmbDia;
    public $AmbSemana;
    public $AmbMes;
    public $AmbEstado;
    public $AmbMostrar;
    public $AmbDescripcion;
    
    public function getIdAmbiente()
    {
        return $this->idAmbiente;
    }

    public function getIdPropiedad()
    {
        return $this->idPropiedad;
    }

    public function getIdOperacion()
    {
        return $this->idOperacion;
    }

    public function getAmbDormitorio()
    {
        return $this->AmbDormitorio;
    }

    public function getAmbBanio()
    {
        return $this->AmbBanio;
    }

    public function getAmbAreaTotal()
    {
        return $this->AmbAreaTotal;
    }

    public function getAmbAmoblado()
    {
        return $this->AmbAmoblado;
    }

    public function getAmbDireccion()
    {
        return $this->AmbDireccion;
    }

    public function getAmbGoogleMaps()
    {
        return $this->AmbGoogleMaps;
    }

    public function getAmbDia()
    {
        return $this->AmbDia;
    }

    public function getAmbSemana()
    {
        return $this->AmbSemana;
    }

    public function getAmbMes()
    {
        return $this->AmbMes;
    }

    public function getAmbEstado()
    {
        return $this->AmbEstado;
    }

    public function getAmbMostrar()
    {
        return $this->AmbMostrar;
    }

    public function getAmbDescripcion()
    {
        return $this->AmbDescripcion;
    }

    public function setIdAmbiente($idAmbiente)
    {
        $this->idAmbiente = $idAmbiente;
    }

    public function setIdPropiedad($idPropiedad)
    {
        $this->idPropiedad = $idPropiedad;
    }

    public function setIdOperacion($idOperacion)
    {
        $this->idOperacion = $idOperacion;
    }

    public function setAmbDormitorio($AmbDormitorio)
    {
        $this->AmbDormitorio = $AmbDormitorio;
    }

    public function setAmbBanio($AmbBanio)
    {
        $this->AmbBanio = $AmbBanio;
    }

    public function setAmbAreaTotal($AmbAreaTotal)
    {
        $this->AmbAreaTotal = $AmbAreaTotal;
    }

    public function setAmbAmoblado($AmbAmoblado)
    {
        $this->AmbAmoblado = $AmbAmoblado;
    }

    public function setAmbDireccion($AmbDireccion)
    {
        $this->AmbDireccion = $AmbDireccion;
    }

    public function setAmbGoogleMaps($AmbGoogleMaps)
    {
        $this->AmbGoogleMaps = $AmbGoogleMaps;
    }

    public function setAmbDia($AmbDia)
    {
        $this->AmbDia = $AmbDia;
    }

    public function setAmbSemana($AmbSemana)
    {
        $this->AmbSemana = $AmbSemana;
    }

    public function setAmbMes($AmbMes)
    {
        $this->AmbMes = $AmbMes;
    }

    public function setAmbEstado($AmbEstado)
    {
        $this->AmbEstado = $AmbEstado;
    }

    public function setAmbMostrar($AmbMostrar)
    {
        $this->AmbMostrar = $AmbMostrar;
    }

    public function setAmbDescripcion($AmbDescripcion)
    {
        $this->AmbDescripcion = $AmbDescripcion;
    }

    public function exchangeArray(array $data)
    {
        $this->idAmbiente = (!empty($data['idAmbiente'])) ? $data['idAmbiente'] : null;
        $this->idPropiedad = (!empty($data['idPropiedad'])) ? $data['idPropiedad'] : null;
        $this->idOperacion = (!empty($data['idOperacion'])) ? $data['idOperacion'] : null;
        $this->AmbDormitorio = (!empty($data['AmbDormitorio'])) ? $data['AmbDormitorio'] : null;
        $this->AmbBanio = (!empty($data['AmbBanio'])) ? $data['AmbBanio'] : null;
        $this->AmbAreaTotal = (!empty($data['AmbAreaTotal'])) ? $data['AmbAreaTotal'] : null;
        $this->AmbAmoblado = (!empty($data['AmbAmoblado'])) ? $data['AmbAmoblado'] : null;
        $this->AmbDireccion = (!empty($data['AmbDireccion'])) ? $data['AmbDireccion'] : null;
        $this->AmbGoogleMaps = (!empty($data['AmbGoogleMaps'])) ? $data['AmbGoogleMaps'] : null;
        $this->AmbDia = (!empty($data['AmbDia'])) ? $data['AmbDia'] : null;
        $this->AmbSemana = (!empty($data['AmbSemana'])) ? $data['AmbSemana'] : null;
        $this->AmbMes = (!empty($data['AmbMes'])) ? $data['AmbMes'] : null;
        $this->AmbEstado = (!empty($data['AmbEstado'])) ? $data['AmbEstado'] : null;
        $this->AmbMostrar = (!empty($data['AmbMostrar'])) ? $data['AmbMostrar'] : null;
        $this->AmbDescripcion = (!empty($data['AmbDescripcion'])) ? $data['AmbDescripcion'] : null;
    }
    public function toArray($partial = false)
    {
        $arr = array(
            'idAmbiente' => $this->getIdAmbiente(),
            'idPropiedad' => $this->getIdPropiedad(),
            'idOperacion' => $this->getIdOperacion(),
            'AmbDormitorio' => $this->getAmbDormitorio(),
            'AmbBanio' => $this->getAmbBanio(),
            'AmbAreaTotal' => $this->getAmbAreaTotal(),
            'AmbAmoblado' => $this->getAmbAmoblado(),
            'AmbDireccion' => $this->getAmbDireccion(),
            'AmbGoogleMaps' => $this->getAmbGoogleMaps(),
            'AmbDia' => $this->getAmbDia(),
            'AmbSemana' => $this->getAmbSemana(),
            'AmbMes' => $this->getAmbMes(),
            'AmbEstado' => $this->getAmbEstado(),
            'AmbMostrar' => $this->getAmbMostrar(),
            'AmbDescripcion' => $this->getAmbDescripcion(),
        );
        
        if ($partial)
        {
            foreach ($arr as $key => $value)
            {
                if (is_null($value))
                {
                    unset($arr[$key]);
                }
            }
        }

        return $arr;
    }
}