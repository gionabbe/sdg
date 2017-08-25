<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application;

use Zend\Mvc\MvcEvent;

// use ZfcUser\Form\Register;
// use ZfcUser\Form\RegisterFilter;

class Module
{
    const VERSION = '3.1.x-dev';

    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }

    public function onBootstrap(MvcEvent $e)
    {
        $events = $e->getApplication()->getEventManager()->getSharedManager();
        $events->attach('ZfcUser\Form\Base', 'init', function ($e) {
            $form = $e->getTarget();
            // Do what you please with the form instance ($form)
            /* $form = new Register();
            $form->add(array(
                'name' => 'firstname',
                'options' => array(
                    'label' => 'First Name',
                ),
                'attributes' => array(
                    'type' => 'text',
                    'class' => 'form-control',
                ),
            ));
            $form->add(array(
                'name' => 'lastname',
                'options' => array(
                    'label' => 'Last Name',
                ),
                'attributes' => array(
                    'type' => 'text',
                    'class' => 'form-control',
                ),
            )); */
        });
        $events->attach('ZfcUser\Form\RegisterFilter', 'init', function ($e) {
            $filter = $e->getTarget();
            // Do what you please with the filter instance ($filter)
            /* $filter = new RegisterFilter();
            $filter->add(array(
                'name'       => 'firstname',
                'required'   => true,
                'validators' => array(
                    array(
                        'name'    => 'StringLength',
                        'options' => array(
                            'min' => 3,
                            'max' => 255,
                        ),
                    ),
                    $this->usernameValidator,
                ),
            ));
            $filter->add(array(
                'name'       => 'lastname',
                'required'   => true,
                'validators' => array(
                    array(
                        'name'    => 'StringLength',
                        'options' => array(
                            'min' => 3,
                            'max' => 255,
                        ),
                    ),
                    $this->usernameValidator,
                ),
            )); */
        });
    }
}
