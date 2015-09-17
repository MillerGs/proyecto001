<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Portal\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

use Zend\Db\Adapter\Adapter;
use Portal\Model\AmbienteTable;

class IndexController extends AbstractActionController
{
    public $sbAdapter;
    
    public function indexAction()
    {
        $this->dbAdapter = $this->getServiceLocator()->get('Zend\Db\Adapter\Adapter');
        $ambientes = new AmbienteTable($this->dbAdapter);
        $valores = array(
            'datos' => $ambientes->getAmbientes(),
        );
        return new ViewModel($valores);
    }
    public function detalleAction()
    {
        $this->dbAdapter = $this->getServiceLocator()->get('Zend\Db\Adapter\Adapter');
        $ambientes = new AmbienteTable($this->dbAdapter);
        $idAmbiente = (int) $this->params()->fromRoute('idAmbiente',0);
        $valores = array(
            'datos' => $ambientes->getDetallePorId($idAmbiente),
        );
        return new ViewModel($valores);
    }
}
