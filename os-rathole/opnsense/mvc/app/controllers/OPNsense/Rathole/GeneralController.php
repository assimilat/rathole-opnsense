<?php

namespace OPNsense\Rathole;

use OPNsense\Base\IndexController;

class GeneralController extends IndexController
{
    public function indexAction()
    {
        $this->view->form = $this->getForm("general");
        $this->view->pick('OPNsense/Rathole/general');
    }
}
