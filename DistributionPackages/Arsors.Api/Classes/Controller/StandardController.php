<?php
namespace Arsors\Api\Controller;

/*
 * This file is part of the Arsors.Api package.
 */

use Neos\Flow\Annotations as Flow;
use Neos\Flow\Mvc\Controller\ActionController;

class StandardController extends ActionController
{
    /**
     * @return void
     */
    public function indexAction()
    {
        $this->view->assign('foos', array(
            'bar', 'baz'
        ));
    }
    /**
     * @return void
     */
    public function adminAction()
    {
        \Neos\Flow\var_dump('debug');
        die();
        $this->view->assign('foos', array(
            'bar', 'baz'
        ));
    }
}
