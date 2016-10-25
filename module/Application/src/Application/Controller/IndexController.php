<?php

/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController {

    public function indexAction() {
        return new ViewModel();
    }
    
    public function serviceAction() {
        $this->layout('layout/contact');
        return new ViewModel();
    }
    
    public function partenaireAction() {
        $this->layout('layout/contact');
        return new ViewModel();
    }
    
    public function realisationAction() {
        $this->layout('layout/contact');
        return new ViewModel();
    }
    
    public function realisation1Action() {
        return new ViewModel();
    }
    
    public function realisation2Action() {
        return new ViewModel();
    }

    public function contactAction() {
        $this->layout('layout/contact');
        return new ViewModel();
    }

}
