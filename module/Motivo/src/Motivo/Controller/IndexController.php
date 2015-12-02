<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/Motivo for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Motivo\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Motivo\Form\Motivo as MotivoForm;
use Motivo\Model\Motivo;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        return array();
    }

    public function editAction()
    {
//     	$form = new MotivoForm();
//     	return array('form'=>$form);
    }

    public function saveAction()
    {
    	$motivo = new Motivo($_POST);
    	$motivoTable = $this->getServiceLocator()->get('MotivoTable');
    	$motivoTable->save($motivo);
    	
    	$this->redirect()->toRoute('motivo');
    }

    public function deleteAction()
    {
    	
        return array();
    }
}
