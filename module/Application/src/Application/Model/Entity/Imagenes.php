<?php

/**
 * @author Miller Gómez <miller.gomez@clicksandbricks.pe>
 * @link linkedin <pe.linkedin.com/in/millergomez>
 * @fecha 17/09/2015
 * @tiempo 09:25:26 AM
 */

namespace Application\Model\Entity;

class Imagenes
{
    private $idImagen;
    private $ImgArchivo;
    private $ImgTitulo;
    private $ImgDescripcion;
    private $ImgTipo;
    private $ImgMostrar;
    private $idAmbiente;
    
    public function getIdImagen()
    {
        return $this->idImagen;
    }

    public function getImgArchivo()
    {
        return $this->ImgArchivo;
    }

    public function getImgTitulo()
    {
        return $this->ImgTitulo;
    }

    public function getImgDescripcion()
    {
        return $this->ImgDescripcion;
    }

    public function getImgTipo()
    {
        return $this->ImgTipo;
    }

    public function getImgMostrar()
    {
        return $this->ImgMostrar;
    }

    public function getIdAmbiente()
    {
        return $this->idAmbiente;
    }

    public function setIdImagen($idImagen)
    {
        $this->idImagen = $idImagen;
    }

    public function setImgArchivo($ImgArchivo)
    {
        $this->ImgArchivo = $ImgArchivo;
    }

    public function setImgTitulo($ImgTitulo)
    {
        $this->ImgTitulo = $ImgTitulo;
    }

    public function setImgDescripcion($ImgDescripcion)
    {
        $this->ImgDescripcion = $ImgDescripcion;
    }

    public function setImgTipo($ImgTipo)
    {
        $this->ImgTipo = $ImgTipo;
    }

    public function setImgMostrar($ImgMostrar)
    {
        $this->ImgMostrar = $ImgMostrar;
    }

    public function setIdAmbiente($idAmbiente)
    {
        $this->idAmbiente = $idAmbiente;
    }

    public function exchangeArray(arrar $data)
    {
        $this->idImagen = (!empty($data['idImagen'])) ? $data['idAmagen'] : null;
        $this->ImgArchivo = (!empty($data['ImgArchivo'])) ? $data['ImgArchivo'] : null;
        $this->ImgTitulo = (!empty($data['ImgTitulo'])) ? $data['ImgTitulo'] : null;
        $this->ImgDescripcion = (!empty($data['ImgDescripcion'])) ? $data['ImgDescripcion'] : null;
        $this->ImgTipo = (!empty($data['ImgTipo'])) ? $data['ImgTipo'] : null;
        $this->ImgMostrar = (!empty($data['ImgMostrar'])) ? $data['ImgMostrar'] : null;
        $this->idAmbiente = (!empty($data['idAmbiente'])) ? $data['idAmbiente'] : null;
    }
    
    public function toArray($partial = false)
    {
        $arr = array (
            'idImagen' => $this->getIdAmbiente(),
            'ImgArchivo' => $this->getImgArchivo(),
            'ImgTitulo' => $this->getImgTitulo(),
            'ImgDescripcion' => $this->getImgDescripcion(),
            'ImgTipo' => $this->getImgTipo(),
            'ImgMostrar' => $this->getImgMostrar(),
            'idAmbiente' => $this->getIdAmbiente(),
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