<?php

namespace CatalystWP\Atom\controllers;

class FloorplanController extends \CatalystWP\Nucleus\Controller
{
    public function initialize($data)
    {
        $this->view->display($data);
    }
}
