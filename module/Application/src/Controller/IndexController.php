<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
//         $this->flashMessenger()->addSuccessMessage('Success message, bravo!');
//         $this->flashMessenger()->addErrorMessage('Error with system, contact us.');
//         $this->flashMessenger()->addInfoMessage('Info message, to do whatever...');
//         $this->flashMessenger()->addWarningMessage('Warning message to be careful.');

        return new ViewModel();
    }
}
